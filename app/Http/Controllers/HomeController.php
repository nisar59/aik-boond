<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Modules\Users\Entities\People;
use Modules\Donors\Entities\Donor;
use Modules\Doctor\Entities\Doctor;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $people=People::count();
        $doctor=Doctor::count();
        $donor=Donor::count();
        return view('home',compact('people','doctor','donor'));

    }
}
