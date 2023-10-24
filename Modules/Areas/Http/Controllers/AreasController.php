<?php

namespace Modules\Areas\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Country\Entities\Country;
use Modules\States\Entities\States;
use Modules\Cities\Entities\Cities;
use Modules\Areas\Entities\Areas;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (request()->ajax()) {
        $areas=Areas::select('*')->orderBy('id','ASC')->get();
           return DataTables::of($areas)
           ->addColumn('action',function ($row){
               $action='';
               if(Auth::user()->can('areas.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('areas/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }
            if(Auth::user()->can('areas.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('areas/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
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
          ->editColumn('city_id',function ($row)
           {
               return City($row->city_id);
           })
           ->rawColumns(['action'])
           ->make(true);
        }
        return view('areas::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $states=States::where('country_id',167)->get();
        return view('areas::create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
        $req->validate([
            'state_id'=>'required',
            'city_id'=>'required',
            'name'=>'required',
            'nearest_place'=>'required',
        ]);
         DB::beginTransaction();
         try{
            Areas::create($req->except('_token'));
            DB::commit();
            return redirect('areas')->with('success','Areas sccessfully created');
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
        return view('areas::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $areas=Areas::find($id);
        $states=States::where('country_id',167)->get();
        $cities=Cities::all();
        return view('areas::edit',compact('areas','states','cities'));
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
            'city_id'=>'required',
            'name'=>'required',
            'nearest_place'=>'required',
        ]);
         DB::beginTransaction();
         try{
            Areas::find($id)->update($req->except('_token'));
            DB::commit();
            return redirect('areas')->with('success','Areas sccessfully Updated');
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
        Areas::find($id)->delete();
        DB::commit();
         return redirect('areas')->with('success','Area successfully deleted');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }
    }
}
