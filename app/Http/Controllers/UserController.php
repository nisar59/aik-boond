<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Donors\Entities\Donor;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Throwable;
use Auth;
use DB;

class UserController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'RouteServiceProvider::HOME';


    function __construct()
    {
         auth()->setDefaultDriver('donors');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
      return view('frontend.about-us');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
      return view('frontend.services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
      return view('frontend.blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
      return view('frontend.contact-us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function registerForm()
    {
        return view('frontend.auth.register');
    }

    public function register(Request $req)
    {
        $req->validate([
            'name'=>'required',
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
            return redirect('donors')->with('success','You have sccessfully registered');
         }catch(Exception $ex){
            DB::rollback();
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
            DB::rollback();
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }
    }



    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'contact_no';
    }


}
