<?php

namespace Modules\Donors\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Donors\Entities\Donor;
use Yajra\DataTables\Facades\DataTables;
use Auth;
class DonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (request()->ajax()) {
        $donors=Donor::select('*')->orderBy('id','ASC')->get();
            return DataTables::of($donors)
                ->addColumn('action', function ($row) {
                    $action='';
                if(Auth::user()->can('donors.edit')){
                $action.='<a class="btn btn-primary btn-sm" href="'.url('donors/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
                }
                if(Auth::user()->can('donors.delete')){
                $action.='
                    <a class="btn btn-danger btn-sm" href="'.url('donors/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
                }                            
                return $action;
                })
                ->editColumn('name', function ($row) {
                    return $row->name;
                })
                ->editColumn('age', function ($row) {
                    return $row->age;
                })

                ->editColumn('upazila_name', function ($row) {
                    return $row->upazila_name ;
                })
                ->editColumn('blood_group', function ($row) {
                    return $row->blood_group;
                })
                ->editColumn('contact_no', function ($row) {
                    return $row->contact_no;
                })
                ->editColumn('last_donate_date', function ($row) {
                    return $row->last_donate_date;
                })
                ->addColumn('image', function ($row) {
                    $path=public_path('img');
                    $url=url('img');
                    $img=$url.'/images.png';
                    if(file_exists($path.'/donor/'.$row->image) AND $row->image!=null){
                    $img=$url.'/donor/'.$row->image;
                    }

                    return '<img src="'.$img.'" height="50" width="50">';
                })
                ->rawColumns(['action','image'])
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
        $doner=[];
        return view('donors::create',compact('doner'));
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
            'contact_no'=>'required',
            'last_donate_date'=>'required',
        ]);

        $path=public_path('img/donor');
            $donor=Donor::create([
                'image'=>FileUpload($req->file('image'),$path),
                'name'=>$req->name,
                'age'=>$req->age,
                'upazila_name'=>$req->upazila_name,
                'blood_group'=>$req->blood_group,
                'contact_no'=>$req->contact_no,
                'last_donate_date'=>$req->last_donate_date
            ]);
 
        if($donor->save()){
        return redirect('donors')->with('success', 'Blood Donor successfully added');
        }
        else{
        return redirect()->back()->with('error', 'Something went wrong');
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
        $doner=[];
        $this->data['donor']=Donor::find($id);
        return view('donors::edit',compact('doner'))->withData($this->data);
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
            'upazila_name'=>'required',
            'blood_group'=>'required',
            'contact_no'=>'required',
            'last_donate_date'=>'required',
        ]);
        $file=$req->file('image');
        if ($file!=null) {
        $imgname=$file->getClientOriginalName();
   
        }
        $path=public_path('img/donor');
        $donor=Donor::find($id);
         if ($req->file('image')!=null) {
        $donor->image=FileUpload($req->file('image'),$path);
        }
        $donor->name=$req->name;
        $donor->age=$req->age;
        $donor->upazila_name=$req->upazila_name;
        $donor->blood_group=$req->blood_group;
        $donor->contact_no=$req->contact_no;
        $donor->last_donate_date=$req->last_donate_date;
        if($donor->save()){
         return redirect('donors')->with('success','Blood Donor successfully Updated');
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