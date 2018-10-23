<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RutasView extends Controller
{
    public function index_Al()
    {
        return view('home');
    }
    public function V_Alumnos()
    {
        return view('Alumnos.Registro');
    }
    public function V_Padres()
    {
        return view('Alumnos.RegistroPadres');
    }
    public function V_Complemento(){
        return view('Alumnos.RegistroComplementos');
    }
    public function V_Acerca(){
        return view('ContenidoWeb.AcercaEpo');
    }

    public function V_Admin(){
        return view('Administrador');
    }
    public function V_Login(){
        return view('Admin.login');
    }
    public function V_ins(){
        return view('Admin.Prueba');
    }

}
