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

Route::get('/', function () {
    return view('home');
});

Route::get('/Registro','RutasView@V_Alumnos')->name('Registro');
Route::get('/home','RutasView@index_Al')->name('home');
Route::get('/RegistroPadres','RutasView@V_Padres')->name('RegistroPadres');
Route::get('/Complemento','RutasView@V_Complemento')->name('Complemento');
Route::get('/Acerca','RutasView@V_Acerca')->name('Acerca');
//--method---Alias de la vista--/controlador----funcion----name+alias de la visa

