<?php

namespace Modules\Stories\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Areas\Entities\Areas;
use Modules\Stories\Entities\Stories;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
class StoriesController extends Controller
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
            $stories=Stories::query();
            $total=$stories->count();

           $stories=$stories->offset($strt)->limit($length)->get();

           return DataTables::of($stories)
           ->setOffset($strt)
           ->with([
                'recordsTotal'=>$total,
                'recordsFiltered'=>$total
           ])
           ->addColumn('action',function ($row){
               $action='';
               if(Auth::user()->can('stories.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('stories/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }
            if(Auth::user()->can('stories.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('stories/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
           }
               return $action;
           })
           ->rawColumns(['action'])
           ->make(true);
        }
        return view('stories::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('stories::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
            $req->validate([
            'title'=>'required',
            'slug'=>'required',
            'description'=>'required',
          ]);
           DB::beginTransaction();
         try{
            Stories::create($req->except('_token'));
        DB::commit();
         return redirect('stories')->with('success','Story successfully created');
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
        return view('stories::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $stories=Stories::find($id);
        return view('stories::edit',compact('stories'));
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
            'title'=>'required',
            'slug'=>'required',
            'description'=>'required',
          ]);
           DB::beginTransaction();
         try{
            Stories::find($id)->update($req->except('_token'));
        DB::commit();
         return redirect('stories')->with('success','Story successfully Updated');
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
        Stories::find($id)->delete();
        DB::commit();
         return redirect('stories')->with('success','Stories successfully deleted');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }
    }
}
