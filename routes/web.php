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
	Route::post('updUsers', 'Principal@updUsuarios');
	Route::post('delDiag', 'DiagramController@delDiagrama');
    // meter diagramas aqui
});

Route::get('/', function () {
	return view('landing');
});

Route::post('editGraph', 'Principal@editGraph');

Route::get('/editor', function() {
   return view('editor.editor');
});

route::post('dlteAux','Principal@deleteAuxGraph');

Route::post('api/saveDiagram','DiagramController@store');
Route::get('generar', 'DiagramController@Laucher');
Route::get('plantilla', function (){
	return view('plantilla');
});

Route::get('trad/{tipo}', ['uses' =>'DiagramController@Traduct']);

Auth::routes();

Route::get('imagen/{id}','Diagrama2Img@Convertir');

Route::post('diagUsuario', 'Principal@diagUsuarios');

Route::get('exportar', function() {
  return view('editor.export');
});
