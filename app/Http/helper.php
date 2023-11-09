<?php
use Modules\Settings\Entities\Settings;
use Modules\Country\Entities\Country;
use Modules\States\Entities\States;
use Modules\Cities\Entities\Cities;
use Modules\Areas\Entities\Areas;
use Modules\AddressesAndTowns\Entities\AddressesAndTowns;
use Modules\PaymentMethods\Entities\PaymentMethods;


function AllPermissions()
{
	$role=[];
	$role['users']=['view','add','edit','delete'];
	$role['permissions']=['view','add','edit','delete'];
	$role['country']=['view','add','edit','delete'];
	$role['states']=['view','add','edit','delete'];
	$role['cities']=['view','add','edit','delete'];
	$role['areas']=['view','add','edit','delete'];
	$role['addresses-and-towns']=['view','add','edit','delete'];
	$role['donors']=['view','add','edit','delete'];
	$role['stories']=['view','add','edit','delete'];
	$role['payment-methods']=['view','add','edit','delete'];
	$role['tokes']=['view','add','edit','delete'];
	$role['settings']=['view','add','edit','delete'];



return $role;

}

function FileUpload($file, $path){
	if($file==null){return null;}
	 $imgname=$file->getClientOriginalName();
	  if($file->move($path,$imgname)){
	  	return $imgname;
	  }
	  else{
	  	return null;
	  }
}


function Settings()
{
	return Settings::first();
}

function Country($id)
{
	$country=Country::find($id);
	if ($country!=null) {
		return $country->name;
	}
}

function PaymentMethods($id)
{
	$p_method=PaymentMethods::find($id);
	if ($p_method!=null) {
		return $p_method->bank_name;
	}
}


function City($id)
{
	$cities=Cities::find($id);
	if ($cities!=null) {
		return $cities->name;
	}
}
function Area($id)
{
	$address=Areas::find($id);
	if ($address!=null) {
		return $address->name;
	}
}
function Address($id)
{
	$area=AddressesAndTowns::find($id);
	if ($area!=null) {
		return $area->name;
	}
}

function State($id)
{
	$states=States::find($id);
	if ($states!=null) {
		return $states->name;
	}
}

function AllStates()
{
    $states=States::where('country_id',167)->get();
    return $states;
}

function AllCities()
{
    $cities=Cities::all();
    return $cities;
}

