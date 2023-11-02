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

Route::group(['prefix'=>'tokens', 'middleware'=>['permission:tokens.view']],function(){
    Route::get('/', 'TokensController@adminDashboard');
    Route::get('/destroy/{id}', 'TokensController@destroy');
});

Route::group(['prefix'=>'tokens', 'middleware'=>['permission:tokens.edit']],function(){
    Route::get('/edit/{id}', 'TokensController@edit');
    Route::POST('/update/{id}', 'TokensController@update');
    Route::get('/status/{id}', 'TokensController@status');
});

Route::group(['prefix'=>'tokens', 'middleware'=>['permission:tokens.delete']],function(){
    Route::get('/destroy/{id}', 'TokensController@destroy');
});

});






Route::group(['prefix'=>'tokens','middleware'=>'auth'],function(){
    Route::get('user-dashboard', 'TokensController@index');
});

Route::group(['prefix'=>'tokens','middleware'=>'auth'],function(){
    Route::get('/create', 'TokensController@create');
    Route::POST('/store', 'TokensController@store');

});
Route::group(['prefix'=>'tokens','middleware'=>'auth'],function(){
    Route::get('/edit/{id}', 'TokensController@edit');
    Route::POST('/update/{id}', 'TokensController@update');
});
