<?php

namespace Modules\States\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Country\Entities\Country;
use Modules\States\Entities\States;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (request()->ajax()) {
        $states=States::select('*')->orderBy('id','ASC')->get();
            return DataTables::of($states)
                ->addColumn('action', function ($row) {
                    $action='';
                if(Auth::user()->can('states.edit')){
                $action.='<a class="btn btn-primary btn-sm" href="'.url('states/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
                }
                if(Auth::user()->can('states.delete')){
                $action.='
                    <a class="btn btn-danger btn-sm" href="'.url('states/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
                }                            
                return $action;
                })->editColumn('country_id', function ($row) {
                    return Country($row->country_id);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('states::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        return view('states::create',compact('countries'));
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
            States::create($req->except('_token'));
            DB::commit();
            return redirect('states')->with('success','State sccessfully created');
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
        return view('states::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $state=States::find($id);
        $countries=Country::all();
        return view('states::edit',compact('state','countries'));
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
            'name'=>'required',
        ]);
          DB::beginTransaction();
         try{
            States::find($id)->update($req->except('_token'));
            DB::commit();
            return redirect('states')->with('success','State sccessfully Updated');
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
        States::find($id)->delete();
        DB::commit();
         return redirect('states')->with('success','State successfully deleted');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }
    }
}
