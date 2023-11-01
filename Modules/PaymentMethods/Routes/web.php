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

/*Route::prefix('paymentmethods')->group(function() {
    Route::get('/', 'PaymentMethodsController@index');
});
*/
Route::prefix('admin')->group(function() {
Route::group(['prefix'=>'payment-methods','middleware' => ['permission:payment-methods.view']],function(){
    Route::get('/', 'PaymentMethodsController@index');
});

Route::group(['prefix'=>'payment-methods','middleware' => ['permission:payment-methods.add']],function(){
    Route::get('/create', 'PaymentMethodsController@create');
    Route::POST('/store', 'PaymentMethodsController@store');


});
Route::group(['prefix'=>'payment-methods','middleware' => ['permission:payment-methods.edit']],function(){
    Route::get('/edit/{id}', 'PaymentMethodsController@edit');
    Route::POST('/update/{id}', 'PaymentMethodsController@update');
     Route::get('status/{id}', 'PaymentMethodsController@status');
});
Route::group(['prefix'=>'payment-methods','middleware' => ['permission:payment-methods.delete']],function(){
    Route::get('/destroy/{id}', 'PaymentMethodsController@destroy');
});
});