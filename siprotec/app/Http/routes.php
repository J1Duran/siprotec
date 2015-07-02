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
Route::get('pase', 'PaseController@ObjetoNuevo');
Route::get('pasescreados', 'PaseController@pasescreados');
Route::post('pase-objeto', 'PaseController@ObjetoNuevo');
Route::resource('pase', 'PaseController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
