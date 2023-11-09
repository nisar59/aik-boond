<?php

namespace Modules\Tokens\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PaymentMethods\Entities\PaymentMethods;
use Modules\Tokens\Entities\Tokens;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
use Carbon;
class TokensController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $id=Auth::user()->id;
        $tokens=Tokens::where('id',$id)->get();
        return view('tokens::index',compact('tokens'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
      public function adminDashboard()
    {     
     
      if (request()->ajax()) {
        $tokens=Tokens::select('*')->orderBy('id','ASC')->get();
           return DataTables::of($tokens)
           ->addColumn('action',function ($row){
               $action='';
               /*if(Auth::user()->can('tokens.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('admin/tokens/adminEdit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }*/
              if(Auth::user()->can('tokens.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('admin/tokens/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
           }
               return $action;
           })
           ->addColumn('fee_slip', function ($row) {                   
                    $path=public_path('images');
                    $url=url('images');
                    $img=$url.'/images.png';
                    if(file_exists($path.'/token/'.$row->fee_slip) AND $row->fee_slip!=null){
                    $img=$url.'/token/'.$row->fee_slip;
                    }

                    return '<img src="'.$img.'" height="50" width="50">';
                })
            ->addColumn('status',function ($row){
               $action='';
               if($row->status==0){
                   $action.='<a class="btn btn-success btn-sm m-1" href="'.url('admin/tokens/status/'.$row->id).'">Active</a>';
                }else{
                   $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('admin/tokens/status/'.$row->id).'">Used</a>';
                }
               return $action;
           })
           ->editColumn('created_at',function($row)
             {
                 return Carbon::parse($row->created_at)->format('d-m-Y');
             })
           ->editColumn('payment_method',function($row)
             {
                 return PaymentMethods($row->payment_method);
             })
           ->rawColumns(['action','status','fee_slip'])
           ->make(true);

           } 
        return view('tokens::admin-dashboard');
    }
    public function create()
    {
         $paymentmethods=PaymentMethods::all();
        return view('tokens::create',compact('paymentmethods'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
        $req->validate([
            'payment_method'=>'required',
            'fee_slip'=>'required',
        ]); 
             DB::beginTransaction();
         try{
            $path=public_path('images/token');
            $inputs=$req->except('_token');
            $randomNumber = random_int(10000, 99999);
            $inputs['fee_slip']=FileUpload($req->fee_slip,$path);
            $inputs['token']=$randomNumber;
            Tokens::create($inputs);
            DB::commit();
            return redirect('tokens/user-dashboard')->with('success','Token sccessfully created');
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
        return view('tokens::show');
    }
    /**
     * Update status.
     * @param int $id
     * @return Renderable
     */
    public function status($id)
    {
        DB::beginTransaction();
        try{
        $page=Tokens::find($id);

        if($page->status==1){
            $page->status=0;
        }
        else{
            $page->status=1;
        }
        $page->save();
        DB::commit();
         return redirect('admin/tokens')->with('success','Token status successfully updated');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
         $paymentmethods=PaymentMethods::all();
         $token=Tokens::find($id);
        return view('tokens::edit',compact('paymentmethods','token'));
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
            'payment_method'=>'required',
/*            'fee_slip'=>'required',
*/        ]);
           DB::beginTransaction();
         try{
            $path=public_path('images/token');
            $inputs=$req->except('_token');
            if ($req->fee_slip !=null) {
            $inputs['fee_slip']=FileUpload($req->fee_slip,$path);
            }
            Tokens::find($id)->update($inputs);
            DB::commit();
            return redirect('tokens/user-dashboard')->with('success','Token sccessfully Updated');
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
        Tokens::find($id)->delete();
        DB::commit();
         return redirect('admin/tokens')->with('success','Token successfully deleted');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         } 
    }
}
