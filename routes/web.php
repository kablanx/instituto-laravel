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
    return view('home');
});

// Documentacion
Route::get("/laravel", function(){
    return view("welcome");
});

// Rutas automáticas
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas del controlador Usuario
Route::get("/editarUsuarioPropio","UserController@editarUsuarioPropio")->name("editarUsuarioPropio");
Route::get("/user/avatar/{filename}", "UserController@getImage")->name("user.avatar");
Route::post("/user/update", "UserController@update")->name("user.update");
Route::get("/user/listado", "UserController@listado")->name("user.listado");
/* Route::get("/") */


Route::get("/listarUsuarios", function(){
    return view("alguna");
});

Route::post('/incidencias/save', 'IncidenciaController@save')->name('incidencias.save');
Route::get('/incidencias/crear', 'IncidenciaController@crear')->name('incidencias.crear');