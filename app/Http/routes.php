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
Route::get('/Ubicacion','RutasView@V_Ubicacion')->name('Ubicacion');
Route::get('/Administracion','RutasView@Administracion')->name('Administracion');
Route::get('/Servicios','RutasView@V_Servicios')->name('Servicios');
Route::get('/Vinculacion','RutasView@V_Vinculacion')->name('Vinculacion');
Route::get('/Reinscripciones','RutasView@V_Reinscripciones')->name('Reinscripciones');
Route::get('/Inscripciones','RutasView@V_Inscripciones')->name('Inscripciones');
Route::get('/Tramites','RutasView@V_Tramites')->name('Tramites');
//--method---Alias de la vista--/controlador----funcion----name+alias de la visa
Route::get('/Alumnos','Alumno@Alumnos')->name('Alumnos');
Route::POST('/GAlumnos','Alumno@GAlumnos')->name('GAlumnos');
Route::get('/C_alumno','Alumno@C_alumno')->name('C_alumno');
//Eliminación Lógica
Route::get('/Des_Alumno/{IdMatricula}','Alumno@Des_Alumno')->name('Des_Alumno');
        //Activación
Route::get('/Act_Alumno/{IdMatricula}','Alumno@Act_Alumno')->name('Act_Alumno');
        //Eliminación Física
Route::get('/Del_Alumno/{IdMatricula}','Alumno@Del_Alumno')->name('Del_Alumno');

//Biblioteca
    //Autores
        //Alta
Route::get('/AltasA','Autor@AltasA')->name('AltasA');
Route::POST('/GAutores','Autor@GAutores')->name('GAutores');
        //Eliminación Lógica
Route::get('/ELAutor/{IdAutor}','Autor@ELAutor')->name('ELAutor');
        //Activación
Route::get('/AAutor/{IdAutor}','Autor@AAutor')->name('AAutor');
        //Eliminación Física
Route::get('/EFAutor/{IdAutor}','Autor@EFAutor')->name('EFAutor');
        //Modificación
Route::get('/MAutor/{IdAutor}','Autor@MAutor')->name('MAutor');
Route::POST('/GAutor','Autor@GAutor')->name('GAutor');

    //Editoriales
        //Alta
Route::get('/AltasE','Editorial@AltasE')->name('AltasE');
Route::POST('/GEditoriales','Editorial@GEditoriales')->name('GEditoriales');
        //Eliminación Lógica
Route::get('/ELEditorial/{IdEditorial}','Editorial@ELEditorial')->name('ELEditorial');
        //Activación
Route::get('/AEditorial/{IdEditorial}','Editorial@AEditorial')->name('AEditorial');
        //Eliminación Física
Route::get('/EFEditorial/{IdEditorial}','Editorial@EFEditorial')->name('EFEditorial');
        //Modificación
Route::get('/MEditorial/{IdEditorial}','Editorial@MEditorial')->name('MEditorial');
Route::POST('/GEditorial','Editorial@GEditorial')->name('GEditorial');

    //Categorias
        //Alta
Route::get('/AltasC','Categoria@AltasC')->name('AltasC');
Route::POST('/Gcategorias','Categoria@Gcategorias')->name('Gcategorias');
        //Eliminación Lógica
Route::get('/ELCategoria/{IdCategoria}','Categoria@ELCategoria')->name('ELCategoria');
        //Activación
Route::get('/ACategoria/{IdCategoria}','Categoria@ACategoria')->name('ACategoria');
        //Eliminación Física
Route::get('/EFCategoria/{IdCategoria}','Categoria@EFCategoria')->name('EFCategoria');
        //Modificación
Route::get('/MCategoria/{IdCategoria}','Categoria@MCategoria')->name('MCategoria');
Route::POST('/GCategoria','Categoria@GCategoria')->name('GCategoria');

    //Libros
        //Alta
Route::get('/AltasL','Libro@AltasL')->name('AltasL');
Route::POST('/Glibros','Libro@Glibros')->name('Glibros');
        //Eliminación Lógica
Route::get('/ELLibro/{IdLibro}','Libro@ELLibro')->name('ELLibro');
        //Activación
Route::get('/ALibro/{IdLibro}','Libro@ALibro')->name('ALibro');
        //Eliminación Física
Route::get('/EFLibro/{IdLibro}','Libro@EFLibro')->name('EFLibro');
        //Modificación
Route::get('/MLibro/{IdLibro}','Libro@MLibro')->name('MLibro');
Route::POST('/GLibro','Libro@GLibro')->name('GLibro');

    //Prestamo de Libros
        //Alta
Route::get('/AltasP','PrestamoLibro@AltasP')->name('AltasP');
Route::POST('/GPrestamos','PrestamoLibro@GPrestamos')->name('GPrestamos');
        //Eliminación Lógica
Route::get('/ELPrestamo/{IdPrestamo}','PrestamoLibro@ELPrestamo')->name('ELPrestamo');
        //Activación
Route::get('/APrestamo/{IdPrestamo}','PrestamoLibro@APrestamo')->name('APrestamo');
        //Eliminación Física
Route::get('/EFPrestamo/{IdPrestamo}','PrestamoLibro@EFPrestamo')->name('EFPrestamo');
        //Modificación
Route::get('/MPrestamo/{IdPrestamo}','PrestamoLibro@MPrestamo')->name('MPrestamo');
Route::POST('/GPrestamo','PrestamoLibro@GPrestamo')->name('GPrestamo');

// Login
Route::get('/login','login@login')->name('login');
Route::POST('/iniciasesion','login@iniciasesion')->name('iniciasesion');
Route::get('/principal','login@principal')->name('principal');
Route::get('/cerrarsesion','login@cerrarsesion')->name('cerrarsesion');
// Maestro
Route::get('/Maestros','Maestro@Maestros')->name('Maestros');
Route::POST('/G_Maestro','Maestro@G_Maestro')->name('G_Maestro');
Route::get('/C_Maestros','Maestro@C_Maestros')->name('C_Maestros');
//Eliminación Lógica
Route::get('/Des_Maestro/{IdMaestro}','Maestro@Des_Maestro')->name('Des_Maestro');
        //Activación
Route::get('/Act_Maestro/{IdMaestro}','Maestro@Act_Maestro')->name('Act_Maestro');
        //Eliminación Física
Route::get('/Del_Categoria/{IdMaestro}','Maestro@Del_Categoria')->name('Del_Categoria');