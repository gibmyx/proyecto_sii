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

//RUTA PARA LA LANDING PAGE
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/vue', 'Vue@index');

Auth::routes();

//CONTROLLADOR HOME
Route::post('/ajax_get_detalle', 'HomeController@ajax_get_detalle');
Route::get("home", "HomeController@index");


//CONTROLADOR DASHBOARD
Route::get('/dashboard/{id}', 'dashboardController@index');


//CONTROLLER CORREO
Route::get('/correo', 'correoController@index');
Route::get('/correo/crear', 'correoController@crear');
Route::get('/correo/ver', 'correoController@ver');


//CONTROLLADOR PROYECTO
Route::group(['middleware' => ['auth']], function () {
    Route::get('/proyecto/{id}', 'proyectosController@ver_proyecto');
    Route::get('/proyecto/miembros/{id}', 'proyectosController@miembros');
});
Route::post('/proyecto/ajax_get_proyecto', 'proyectosController@ajax_get_proyecto');
Route::post('/proyecto/ajax_crear_proyecto', 'proyectosController@ajax_crear_proyecto');
