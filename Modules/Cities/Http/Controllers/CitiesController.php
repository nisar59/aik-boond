<?php

namespace Modules\Cities\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Country\Entities\Country;
use Modules\States\Entities\States;
use Modules\Cities\Entities\Cities;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $req=request();

         if ($req->ajax()) {

            $strt=$req->start;
            $length=$req->length;

            $cities=Cities::query();

            if ($req->country_id != null) {
             $cities->where('country_id','LIKE','%'.$req->country_id.'%');
            }
            if ($req->state_id != null) {
            $cities->where('state_id', $req->state_id);
            }
             if ($req->name != null) {
            $cities->where('name', $req->name);
            } 
            $total=$cities->count();

           $cities=$cities->offset($strt)->limit($length)->get();

           return DataTables::of($cities)
           ->setOffset($strt)
           ->with([
                'recordsTotal'=>$total,
                'recordsFiltered'=>$total
           ])
           ->addColumn('action',function ($row){
               $action='';
               if(Auth::user()->can('cities.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('admin/cities/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }
            if(Auth::user()->can('cities.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('admin/cities/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
           }
               return $action;
           })->editColumn('country_id',function ($row)
           {
               return Country($row->country_id);
           })
          ->editColumn('state_id',function ($row)
           {
               return State($row->state_id);
           })
           ->rawColumns(['action'])
           ->make(true);
        }
        $countries=Country::all();
        $states=States::all();
        return view('cities::index',compact('countries','states'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        return view('cities::create',compact('countries'));
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
         $req->validate([
            'name'=>'required',
        ]);
        DB::beginTransaction();
         try{
            Cities::create($req->except('_token'));
            DB::commit();
            return redirect('admin/cities')->with('success','Cities sccessfully created');
         }catch(Exception $ex){
            DB::rollback();
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
            DB::rollback();
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());


        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('cities::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $cities=Cities::find($id);
        $countries= Country::all();
        $states= States::all();
        return view('cities::edit',compact('cities','countries','states'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $req, $id)
    {
         $req->validate([
            'state_id'=>'required',
            'name'=>'required',
        ]);
         DB::beginTransaction();
         try{
            Cities::find($id)->update($req->except('_token'));
            DB::commit();
            return redirect('admin/cities')->with('success','Cities sccessfully Updated');
         }catch(Exception $ex){
            DB::rollback();
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
            DB::rollback();
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());


        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try{
        Cities::find($id)->delete();
        DB::commit();
         return redirect('admin/cities')->with('success','City successfully deleted');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }
    }
}
