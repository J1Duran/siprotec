<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('proyectos', 'ProyectosController@index');
Route::get('ruta_objetos_originales', 'RutaObjetoController@index');
//Route::get('pase', 'PaseController@index');
Route::resource('pase', 'PaseController');
//Route::post('pase', 'PaseController@store');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
