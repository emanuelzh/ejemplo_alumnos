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

/**
 * Home
 */
Route::get('/','AlumnosController@index');

/**
 * rutas para aplicar la beca
 */
Route::get('alumnos/{id}/colegiatura','ColegiaturasController@create');
Route::post('alumnos/{id}/colegiatura','ColegiaturasController@store');

/**
 * Resource para alumno
 */
Route::resource('alumnos','AlumnosController');

