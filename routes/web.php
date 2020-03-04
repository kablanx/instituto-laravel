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


Route::group(['middleware' => 'auth'], function () {
// Rutas del controlador Usuario
Route::get("/user/editarUsuarioPropio","UserController@editarUsuarioPropio")->name("editarUsuarioPropio");
Route::get("/user/editarUsuario/{id}","UserController@editarUsuario")->name("user.editarUsuario");
Route::get("/user/avatar/{filename}", "UserController@getImage")->name("user.avatar");
Route::get("/user/listado/{regsxpag}", "UserController@listado")->name("user.listado");
Route::get("/user/detalles/{id}", "UserController@detalle")->name("user.detalles");
Route::get("/user/eliminar/{id}", "UserController@eliminar")->name("user.eliminar");
Route::post("/user/updateUsuario", "UserController@updateUsuario")->name("user.updateUsuario");
Route::post("/user/update", "UserController@update")->name("user.update");
Route::get("/user/pdf", "UserController@imprimirPDF")->name("user.pdf");
// Rutas del controlador Incidencia
Route::post('/incidencias/save', 'IncidenciaController@save')->name('incidencias.save');
Route::get('/incidencias/crear', 'IncidenciaController@crear')->name('incidencias.crear');
Route::get("/incidencias/listado/{regsxpag}", "IncidenciaController@listado")->name("incidencias.listado");
Route::get("/incidencias/editarIncidencia/{id}", "IncidenciaController@editarIncidencia")->name("incidencias.editarIncidencia");
Route::get("/incidencias/detalles/{id}", "IncidenciaController@detalle")->name("incidencias.detalles");
Route::get("/incidencias/eliminar/{id}", "IncidenciaController@eliminar")->name("incidencias.eliminar");
Route::get("/incidencias/pdf", "IncidenciaController@imprimirPDF")->name("incidencias.pdf");
Route::post("/user/updateIncidencia", "IncidenciaController@updateIncidencia")->name("incidencias.updateIncidencia");


// Logs
Route::get("/logs/listado/{regsxpag}", "LogController@listado")->name("logs.listado");
Route::get("/logs/pdf", "LogController@imprimirPDF")->name("logs.pdf");

// Mensajes
Route::get("/mensajes/listado/{regsxpag}", "MensajeController@listado")->name("mensajes.listado");
Route::get('/mensajes/crear', 'MensajeController@crear')->name('mensajes.crear');
Route::post('/mensajes/save', 'MensajeController@save')->name('mensajes.save');
Route::get("/mensajes/detalles/{id}", "MensajeController@detalle")->name("mensajes.detalles");
Route::get("/mensajes/eliminar/{id}", "MensajeController@eliminar")->name("mensajes.eliminar");
Route::get("/mensajes/pdf", "MensajeController@imprimirPDF")->name("mensajes.pdf");
Route::get("/mensajes/bandeja/{id}","MensajeController@bandeja")->name("mensajes.bandeja");
});