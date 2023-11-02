<?php

namespace Modules\PaymentMethods\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\PaymentMethods\Entities\PaymentMethods;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use DB;
class PaymentMethodsController extends Controller
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

            $paymentmethods=PaymentMethods::query();
            $total=$paymentmethods->count();

           $paymentmethods=$paymentmethods->offset($strt)->limit($length)->get();

           return DataTables::of($paymentmethods)
           ->setOffset($strt)
           ->with([
                'recordsTotal'=>$total,
                'recordsFiltered'=>$total
           ])
           ->addColumn('action',function ($row){
               $action='';
               if(Auth::user()->can('payment-methods.edit')){
               $action.='<a class="btn btn-primary btn-sm m-1" href="'.url('admin/payment-methods/edit/'.$row->id).'"><i class="fas fa-pencil-alt"></i></a>';
            }
            if(Auth::user()->can('payment-methods.delete')){
               $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('admin/payment-methods/destroy/'.$row->id).'"><i class="fas fa-trash-alt"></i></a>';
           }
               return $action;
           })
           ->addColumn('status',function ($row){
               $action='';
               if($row->status==1){
                   $action.='<a class="btn btn-success btn-sm m-1" href="'.url('admin/payment-methods/status/'.$row->id).'">Active</a>';
                }else{
                   $action.='<a class="btn btn-danger btn-sm m-1" href="'.url('admin/payment-methods/status/'.$row->id).'">Deactive</a>';
                }
               return $action;
           })
           ->rawColumns(['action','status'])
           ->make(true);
        }
        return view('paymentmethods::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('paymentmethods::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $req)
    {
        $req->validate([
            'bank_name'=>'required',
            'account_title'=>'required',
            'iban_no'=>'required',
        ]); 
             DB::beginTransaction();
         try{
            PaymentMethods::create($req->except('_token'));
            DB::commit();
            return redirect('admin/payment-methods')->with('success','Payment Method sccessfully created');
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
        return view('paymentmethods::show');
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
        $page=PaymentMethods::find($id);

        if($page->status==1){
            $page->status=0;
        }
        else{
            $page->status=1;
        }
        $page->save();
        DB::commit();
         return redirect('admin/payment-methods')->with('success','Payment Method status successfully updated');
         
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
        $payment_methods=PaymentMethods::find($id);
        return view('paymentmethods::edit',compact('payment_methods'));
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
            'bank_name'=>'required',
            'account_title'=>'required',
            'iban_no'=>'required',
        ]); 
             DB::beginTransaction();
         try{
            PaymentMethods::find($id)->update($req->except('_token'));
            DB::commit();
            return redirect('admin/payment-methods')->with('success','Payment Method sccessfully Updated');
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
        PaymentMethods::find($id)->delete();
        DB::commit();
         return redirect('admin/payment-methods')->with('success','Payment Method successfully deleted');
         
         } catch(Exception $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }catch(Throwable $e){
            DB::rollback();
            return redirect()->back()->with('error','Something went wrong with this error: '.$e->getMessage());
         }   
    }
}
