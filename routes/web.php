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

Route::resource('materia','MateriaController');
/*Route::get('/ejemplo/url', function() {
return 'hola ejemplo';
} );
Route::get('/ejemplo/vista', function() {
return view('Alumnos.vistaAlumnos');
} );
Route::get('/materia/nueva', function() {
return view ('Materias.formMateria');
} );
Route::post('/materia/store', function() {
$materia = $_POST['materia'];
  //redirect url 
  //sql insert matere
} );


Route::get('/materia/index', function() {
return view ('Materias.IndexMaterias');
} );
Route::get('/materia/edit', function() {
return view ('Materias.formEditMateria');
} );
//Route::get('/materia/show/{id}', );
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('Usuario');