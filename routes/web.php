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
    return view('welcome');
});

Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = ' Apellido'){
	return 'Hola, mi nombre es '.$name . $lastname;
});

Route::get('/mi_primera_ruta', function (){
	return 'Hello World. Esta es mi primera ruta';
});

Route::get('prueba/{name}', 'PruebaController@prueba');
Route::resource('trainers', 'TrainerController');