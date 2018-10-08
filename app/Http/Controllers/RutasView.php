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
}
