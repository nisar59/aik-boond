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

Route::group(['prefix'=>'stories','middleware' => ['permission:stories.view']],function(){
    Route::get('/', 'StoriesController@index');
});

Route::group(['prefix'=>'stories','middleware' => ['permission:stories.add']],function(){
    /*Route::get('/create',function(){
    	    return redirect('stories');
    });
    Route::post('store',function(){
    	    return redirect('stories');
    });*/
    Route::get('/create', 'StoriesController@create');
    Route::POST('/store', 'StoriesController@store');


});
Route::group(['prefix'=>'stories','middleware' => ['permission:stories.edit']],function(){
    Route::get('/edit/{id}', 'StoriesController@edit');
    Route::POST('/update/{id}', 'StoriesController@update');
});
Route::group(['prefix'=>'stories','middleware' => ['permission:stories.delete']],function(){
    Route::get('/destroy/{id}', 'StoriesController@destroy');
});
