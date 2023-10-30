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

Route::get('/', function () {
    return redirect('login');
});

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

Auth::routes();
Route::get('home','HomeController@index')->name('dashboard');
Route::any('logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::post('states','HomeController@fetchStates');
Route::post('cities','HomeController@fetchCity');
Route::post('areas','HomeController@fetchAreas');
		/*User Controller*/
Route::get('index','UserController@index');
Route::get('about-us','UserController@aboutUs');
Route::get('services','UserController@services');
Route::get('blog','UserController@blog');
Route::get('contact-us','UserController@contactUs');
