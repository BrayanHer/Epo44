<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumnos;
use App\localidades;
use App\municipios;

class Alumno extends Controller
{
    public function V_Alumnos(){
        $Id_local = localidades::table('localidades');
        dd($Id_local);
        $Id_muni=municipios::table('municipios');
        //dd($Id_muni);
        return view('Alumnos.Registro',compact('Id_local','Id_muni'));
    }
    public function insertalumno(Request $request){
            //dd($request ->input('CurpA'));
            $alum= new alumno;
            $alum->IdMatricula = $request->MatriA;
            $alum->Nombre=$request->NameA;
            $alum->APaterno=$request->PatA;
            $alum->AMaterno=$request->MatA;
            $alum->save();  
}

}
