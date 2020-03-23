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

Route::group(['middleware' => ['auth']], function () {
    //CONTROLLER HOME
    Route::get("home", "HomeController@index");

    //CONTROLLER CORREO
    Route::get('/correo', 'correoController@index');
    Route::get('/correo/crear', 'correoController@crear');
    Route::get('/correo/ver', 'correoController@ver');

    //CONTROLADOR DASHBOARD
    Route::get('/dashboard/{id}', 'dashboardController@dashboard');

    //CONTROLLADOR PROYECTO
    Route::get('/proyecto/{id}', 'proyectosController@ver_proyecto');
    Route::get('/proyecto/miembros/{id}', 'proyectosController@miembros');
});



//PETITIONES AJAX

//PROYECTOS
Route::post('/proyecto/ajax_get_proyecto', 'proyectosController@ajax_get_proyecto');
Route::post('/proyecto/ajax_crear_proyecto', 'proyectosController@ajax_crear_proyecto');

//SIDEBAR
Route::post('/ajax_get_detalle', 'HomeController@ajax_get_detalle');


//DASHBOARD
Route::get('/dashboard/ajax_get_user/{id}', 'dashboardController@ajax_get_usuario');
Route::post('/dashboard/ajax_guardar_perfil', 'dashboardController@ajax_guardar_perfil');
