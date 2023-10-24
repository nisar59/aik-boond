<?php

namespace Modules\Donors\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Donors\Entities\Donor;
use Modules\States\Entities\States;
use Modules\Cities\Entities\Cities;
use Modules\Areas\Entities\Areas;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
class DonorsController extends Controller
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

            $donors=Donor::query();
             if ($req->name != null) {
            $donors->where('name', $req->name);
            }
            if ($req->address != null) {
            $donors->where('address', $req->address);
            } 
            if ($req->contact_number != null) {
            $donors->where('contact_no','LIKE','%'.$req->contact_number.'%');
            }
            if ($req->area != null) {
            $donors->where('area_id',$req->area);
            }
            $total=$donors->count();

           $donors=$donors->offset($strt)->limit($length)->get();

           return DataTables::of($donors)
           ->setOffset($strt)
           ->with([
                'recordsTotal'=>$total,
                'recordsFiltered'=>$total
           ])
           ->addColumn('action',function ($row){
               $action='';
               if(Auth::user()->can('donors.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('donors/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }
            if(Auth::user()->can('donors.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('donors/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
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
          ->editColumn('area_id',function ($row)
           {
               return Area($row->area_id);
           })
           ->rawColumns(['action'])
           ->make(true);
        }



        return view('donors::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $states=States::where('country_id',167)->get();
        return view('donors::create',compact('states'));
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
            'age'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'area_id'=>'required',
            'contact_no'=>'required',
            'last_donate_date'=>'required',
        ]);
            DB::beginTransaction();
         try{
            Donor::create($req->except('_token'));
            DB::commit();
            return redirect('donors')->with('success','Donor sccessfully created');
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
        return view('donors::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
       
        $donor=Donor::find($id);
        $states=States::where('country_id',167)->get();
        $cities=Cities::all();
        $areas=Areas::all();
        return view('donors::edit',compact('donor','states','cities','areas'));
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
            'age'=>'required',
            'contact_no'=>'required',
            'last_donate_date'=>'required',
        ]);
            DB::beginTransaction();
         try{
            Donor::find($id)->update($req->except('_token'));
            DB::commit();
            return redirect('donors')->with('success','Donor sccessfully Updated');
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
        if(Donor::find($id)->delete()){
        return redirect('donors')->with('success', 'Blood Donor successfully Deleted');
        }
        else{
        return redirect()->back()->with('error', 'Something went wrong');
        }    
    }
    public function apiindex($blood, $upz)
    {
       $slid=Donor::where('blood_group',$blood)->where('upazila_name', $upz)->get();
       $data=[];
       foreach ($slid as $key => $value) {
        $path=public_path('img');
        $url=url('img');
        $img=$url.'/images.png';
        if(file_exists($path.'/donor/'.$value->image) AND $value->image!=null){
        $img=$url.'/donor/'.$value->image;
        }
        $value['image']=$img;
         $value['upazila_name']=Upazila($value->upazila_name);
        $data[]=$value; 
       }
       return response()->json($data);
    }
    
    public function apidonor($id)
    {
       $slid=Donor::find($id);
       
       $data;
       
        $path=public_path('img');
        $url=url('img');
        $img=$url.'/images.png';
        if(file_exists($path.'/donor/'.$slid->image) AND $slid->image!=null){
        $img=$url.'/donor/'.$slid->image;
        }
        $slid['image']=$img;
         $slid['upazila_name']=Upazila($slid->upazila_name);
        $data=$slid; 
      
       return response()->json($data);
    }
}