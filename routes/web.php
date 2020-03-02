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
Route::get("/user/editarUsuarioPropio","UserController@editarUsuarioPropio")->name("editarUsuarioPropio");
Route::get("/user/editarUsuario/{id}","UserController@editarUsuario")->name("user.editarUsuario");
Route::get("/user/avatar/{filename}", "UserController@getImage")->name("user.avatar");
Route::get("/user/listado", "UserController@listado")->name("user.listado");
Route::get("/user/detalles/{id}", "UserController@detalle")->name("user.detalles");

Route::post("/user/updateUsuario", "UserController@updateUsuario")->name("user.updateUsuario");
Route::post("/user/update", "UserController@update")->name("user.update");


Route::get("/listarUsuarios", function(){
    return view("alguna");
});

Route::post('/incidencias/save', 'IncidenciaController@save')->name('incidencias.save');
Route::get('/incidencias/crear', 'IncidenciaController@crear')->name('incidencias.crear');