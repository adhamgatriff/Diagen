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
    return view('index');
});


Route::get('/pr', function () {
    return view('welcome');
});

Route::get('/Editor', function() {
    return view('editor.editor');
});

Route::get('/prueba', function () {
    return view('prueba');

})->name('prueba');


Route::post('api/saveDiagram','saveDiagram@store');


// Route::post('api/saveDiagram', function() {
//     return 'oko';
// });