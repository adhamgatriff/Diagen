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


Route::group(['middleware' => ['auth']], function () {

	Route::get('/principal', 'principal@ReturnDiagrams');
    // meter diagramas aqui
});


Route::get('/', function () {
	return view('landing');
});


Route::get('/editor', function() {
    return view('editor.editor');
});

Route::post('api/saveDiagram','DiagramController@store');
Route::get('/generar', 'DiagramController@Laucher');
Route::get('/recibir','DiagramController@generate');


Route::get('trad/{tipo}', ['uses' =>'DiagramController@Traduct']);

Auth::routes();

Route::get('imagen/{id}','Diagrama2Img@Convertir');

Route::get('exportar', function() {
    return view('editor.export');
});
