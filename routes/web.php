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
* GENERADOR
*/

Route::get('generador', function () {
    return view('generador');
});

/*
* GENERADOR
*/

Route::get('carga', function () {
    return view('cargardatos');
});
/*
* WEB SERVICE
*/
Route::get('webservice', function () {
    return view('webservice');
});
