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
Route::get('/inicio', 'HomeController@inicio')->name('inicio');



// Rutas del controlador Usuario
Route::get("/user/editarUsuarioPropio","UserController@editarUsuarioPropio")->name("editarUsuarioPropio");
Route::get("/user/editarUsuario/{id}","UserController@editarUsuario")->name("user.editarUsuario");
Route::get("/user/avatar/{filename}", "UserController@getImage")->name("user.avatar");
Route::get("/user/listado/{regsxpag}", "UserController@listado")->name("user.listado");
Route::get("/user/detalles/{id}", "UserController@detalle")->name("user.detalles");
Route::get("/user/eliminar/{id}", "UserController@eliminar")->name("user.eliminar");
Route::post("/user/updateUsuario", "UserController@updateUsuario")->name("user.updateUsuario");
Route::post("/user/update", "UserController@update")->name("user.update");

// Rutas del controlador Incidencia
Route::post('/incidencias/save', 'IncidenciaController@save')->name('incidencias.save');
Route::get('/incidencias/crear', 'IncidenciaController@crear')->name('incidencias.crear');
Route::get("/incidencias/listado/{regsxpag}", "IncidenciaController@listado")->name("incidencias.listado");
Route::get("/incidencias/editarIncidencia/{id}", "IncidenciaController@editarIncidencia")->name("incidencias.editarIncidencia");
Route::get("/incidencias/detalles/{id}", "IncidenciaController@detalle")->name("incidencias.detalles");
Route::get("/incidencias/eliminar/{id}", "IncidenciaController@eliminar")->name("incidencias.eliminar");
Route::post("/user/updateIncidencia", "IncidenciaController@updateIncidencia")->name("incidencias.updateIncidencia");

Route::get("/logs/listado/{regsxpag}", "LogController@listado")->name("logs.listado");