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
Route::get('/api/route/{name}', 'RouteController@index');

Route::get('/sessionStatus', function() {
	return ['user' => Auth::user() ? Auth::user() : null];
});


Route::group(['middleware' => ['auth']], function () {

	Route::get('/principal', 'Principal@ReturnDiagrams');
	Route::post('updUsers', 'Principal@updUsuarios');
	Route::post('delDiag', 'DiagramController@delDiagrama');
  Route::get('/editor', function() {
	  return view('editor.editor');
	});
});

Route::get('/', function () {
	return view('index');
});

Route::post('editGraph', 'Principal@editGraph');

route::post('dlteAux','Principal@deleteAuxGraph');

route::post('exportByEditor','editorController@show');

Route::post('api/saveDiagram','DiagramController@store');
Route::post('api/datosDiag','DiagramController@datos');

Route::get('generar', 'DiagramController@Laucher');
Route::post('generarpost', 'DiagramController@Laucher');


Route::get('expMultiple', 'DiagramController@launcherMultiple');
Route::post('unlinkZip', 'DiagramController@unlinkZip');

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
