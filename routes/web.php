<?php

use Illuminate\Support\Facades\Route;
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

Route::get('down', function () {
    Artisan::call('down');
    return redirect('login');
});

Route::get('up-storffy', function () {
    Artisan::call('up');
    return redirect('login');
});



Route::get('optimize-storffy', function () {
    Artisan::call('optimize:clear');
    return redirect('/');
});

//Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::any('/logout', 'Auth\LoginController@logout');
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
Route::get('home','HomeController@index');
Route::get('dashboard', 'HomeController@index');
});


Route::post('states','HomeController@fetchStates');
Route::post('cities','HomeController@fetchCity');
Route::post('areas','HomeController@fetchAreas');
Route::post('address','HomeController@fetchAdress');

		/*User Controller*/
Route::get('/','UserController@index')->name('landing-page');
Route::get('index','UserController@index');
Route::get('about-us','UserController@aboutUs');
Route::get('services','UserController@services');
Route::get('blog','UserController@blog');
Route::get('contact-us','UserController@contactUs');

Route::get('register','UserController@registerForm');
Route::post('register','UserController@register');

Route::get('forget','UserController@forgotForm');


Route::get('login','UserController@showLoginForm');
Route::post('login','UserController@login');
Route::get('logout', 'UserController@logout');

