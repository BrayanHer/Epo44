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
Route::get('/Vps','RutasView@Vps')->name('Vps');

//--method---Alias de la vista--/controlador----funcion----name+alias de la visa
Route::get('/Alumnos','Alumno@Alumnos')->name('Alumnos');
Route::POST('/GAlumnos','Alumno@GAlumnos')->name('GAlumnos');

//Biblioteca
    //Autores
Route::get('/AltasA','Autor@AltasA')->name('AltasA');
Route::POST('/GAutor','Autor@GAutor')->name('GAutor');
    //Editoriales
Route::get('/AltasE','Editorial@AltasE')->name('AltasE');
Route::POST('/GEditoriales','Editorial@GEditoriales')->name('GEditoriales');
    //Categorias
Route::get('/AltasC','Autor@AltasC')->name('AltasC');
Route::POST('/GAutor','Autor@GAutor')->name('GAutor');
    //Libros
Route::get('/AltasL','Editorial@AltasL')->name('AltasL');
Route::POST('/GEditoriales','Editorial@GEditoriales')->name('GEditoriales');
    //Prestamo de Libros
Route::get('/AltasP','Editorial@AltasP')->name('AltasP');
Route::POST('/GEditoriales','Editorial@GEditoriales')->name('GEditoriales');

