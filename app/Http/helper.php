<?php
use Modules\Settings\Entities\Settings;
use Modules\Country\Entities\Country;
use Modules\States\Entities\States;
use Modules\Cities\Entities\Cities;
use Modules\Areas\Entities\Areas;

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
	$role['settings']=['view','add','edit','delete'];



return $role;

}

function FileUpload($img, $path){
	if($img==null){return null;}
	 $imgname=$img->getClientOriginalName();
	  if($img->move($path,$imgname)){
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

function City($id)
{
	$cities=Cities::find($id);
	if ($cities!=null) {
		return $cities->name;
	}
}
function Area($id)
{
	$area=Areas::find($id);
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
    $states=States::all();
    return $states;
}

function AllCities()
{
    $cities=Cities::all();
    return $cities;
}

