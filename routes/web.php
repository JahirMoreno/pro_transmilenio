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
    return view('transmilenio');
});


/*
* CRUDS
*/
Route::resource('ruta','rutaController');
Route::resource('troncal','troncalController');
Route::resource('portal','portalController');

/*
* GENERADOR DE DATOS
*/

Route::get('generador', function () {
    return view('generador');
});

Route::post('genTroncales', 'generadorController@generarTroncales')->name('generarTroncales');
Route::post('genRutas', 'generadorController@generarRutas')->name('generarRutas');
Route::post('genPortales', 'generadorController@generarPortales')->name('generarPortales');

/*
* CARGA DE DATOS
*/

Route::get('carga', function () {
    return view('cargardatos');
});

Route::post('loadTroncales', 'cargardatosController@cargarTroncales')->name('cargarTroncales');
Route::post('loadRutas', 'cargardatosController@cargarRutas')->name('cargarRutas');
Route::post('loadPortales', 'cargardatosController@cargarPortales')->name('cargarPortales');

/*
* WEB SERVICE
*/

Route::get('wsportal', function () {
    return view('webservice/wsportal');
});
Route::get('wsruta', function () {
    return view('webservice/wsruta');
});
Route::get('wstroncal', function () {
    return view('webservice/wstroncal');
});

/*
* REPORTES
*/

Route::get('reportes', 'reportesController@estacionTroncal');

