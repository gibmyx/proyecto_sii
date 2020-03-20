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

Auth::routes();


Route::get('/vue', 'Vue@index');

//CONTROLLADOR HOME
Route::post('/ajax_get_detalle', 'HomeController@ajax_get_detalle');
Route::resource("home", "HomeController");


//CONTROLADOR DASHBOARD
Route::resource('/dashboard', 'dashboardController');


//CONTROLLER CORREO
Route::resource('/correo', 'correoController');
Route::get('/correo/crear', 'correoController@crear');
Route::get('/correo/ver', 'correoController@ver');


//CONTROLLADOR PROYECTO
//Route::resource('/proyecto', 'proyectosController');
Route::get('/proyecto', 'proyectosController@index');
Route::post('/proyecto/ajax_get_proyecto', 'proyectosController@ajax_get_proyecto');
Route::post('/proyecto/store', 'proyectosController@store');
Route::get('/proyecto/miembros', 'proyectosController@miembros');
