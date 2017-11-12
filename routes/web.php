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
    return view('plantilla');
});


Route::get('/editor', function() {
    return view('editor.editor');
});

Route::post('api/saveDiagram','DiagramController@store');
Route::get('/generar', 'DiagramController@Laucher');
Route::get('/recibir','DiagramController@generate');


Route::get('trad/{tipo}', ['uses' =>'DiagramController@Traduct']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

