<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Modules\Donors\Entities\Donor;
use Modules\States\Entities\States;
use Modules\Cities\Entities\Cities;
use Modules\Areas\Entities\Areas;
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
        $people=0;
        $doctor=0;
        $donor=Donor::count();
        return view('home',compact('people','doctor','donor'));

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function fetchStates(Request $req)
    {
         try {
        $data['states'] =States::where("country_id", $req->country_id)->get(["name", "id"]);                          
        return response()->json($data);
        }
        catch(Exception $ex){
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function fetchCity(Request $req)
    {
        try {
        $data['cities'] =Cities::where("state_id", $req->state_id)->get(["name", "id"]);                          
        return response()->json($data);
        }
        catch(Exception $ex){
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }
        
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function fetchAreas(Request $req)
    {
        try{
        $data['areas'] =Areas::where("city_id", $req->city_id)->get(["name", "id"]);                          
        return response()->json($data);
    }
         catch(Exception $ex){
         return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }catch(Throwable $ex){
        return redirect()->back()->with('error','Something went wrong with this error: '.$ex->getMessage());
        }
}

    
}
