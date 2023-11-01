<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function() {
Route::group(['prefix'=>'states','middleware' => ['permission:states.view']],function(){
    Route::get('/', 'StatesController@index');
});

Route::group(['prefix'=>'states','middleware' => ['permission:states.add']],function(){

	 Route::get('/create',function(){
    	    return redirect('states');
    });
	Route::post('store',function(){
    	    return redirect('states');
    });
    // Route::get('/create', 'StatesController@create');
    // Route::POST('/store', 'StatesController@store');

});
Route::group(['prefix'=>'states','middleware' => ['permission:states.edit']],function(){
    Route::get('/edit/{id}', 'StatesController@edit');
    Route::POST('/update/{id}', 'StatesController@update');
});
Route::group(['prefix'=>'states','middleware' => ['permission:states.delete']],function(){
    Route::get('/destroy/{id}', 'StatesController@destroy');
});
});