<?php

Route::get('/', function () {
    return view('home');
});

//Route::get('/Registro','RutasView@V_Alumnos')->name('Registro');
Route::get('/home','RutasView@index_Al')->name('home');
Route::get('/RegistroPadres','RutasView@V_Padres')->name('RegistroPadres');
Route::get('/Complemento','RutasView@V_Complemento')->name('Complemento');
Route::get('/Acerca','RutasView@V_Acerca')->name('Acerca');
Route::get('/Login','RutasView@V_Login')->name('Login');
Route::get('/Administrador','RutasView@V_Admin')->name('Administrador');
//Route::get('/prueba','RutasView@V_ins')->name('prueba');


//--method---Alias de la vista--/controlador----funcion----name+alias de la visa
Route::get('/Alumnos','Alumno@Alumnos')->name('Alumnos');
Route::POST('/GAlumnos','Alumno@GAlumnos')->name('GAlumnos');

//Biblioteca

Route::get('/AltasB','Biblioteca@AltasB')->name('AltasB');
Route::POST('/GAutor','Biblioteca@GAutor')->name('GAutor');
Route::POST('/GEditoriales','Biblioteca@GEditoriales')->name('GEditoriales');
Route::POST('/Gcategorias','Biblioteca@Gcategorias')->name('Gcategorias');
Route::POST('/Glibros','Biblioteca@Glibros')->name('Glibros');


