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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vue', 'Vue@index');
Auth::routes();


//CONTROLLADOR HOME
Route::post('/ajax_get_detalle', 'HomeController@ajax_get_detalle');
Route::resource("home", "HomeController");


//CONTROLADOR DASHBOARD
Route::resource('/dashboard', 'dashboardController@index');