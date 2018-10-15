<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\alumnos;

class Alumno extends Controller
{
    public function Insert_Alum (Request $request){
    alumnos::table('alumnos')->insert(
        [
            'IdMatricula'   =>$request->input('MatriA'),
            'Nombre'        =>$request->input('NameA'),
            'APaterno'      =>$request->input('PatA'),
            'AMaterno'      =>$request->input('MatA'),
            'Edad'          =>$request->input('EdadA'),
            'Sexo'          =>$request->input('SexoA'),
            'FechaNac'      =>$request->input('FnacA'),
            'Celular'       =>$request->input('CelA'),
            'TelFijo'       =>$request->input('FijoA'),
            'Email'         =>$request->input('EmailA'),
            'Calle'         =>$request->input('CalleA'),
            'NumInt'        =>$request->input('IntA'),
            'NumExt'        =>$request->input('ExtA'),
            'CodigoPostal'  =>$request->input('CpA'),
            'Estado'        =>$request->input('EstA'),
            'NombrePadre'   =>$request->input('Namep'),
            'APPadre'       =>$request->input('patP'),
            'AMPadre'       =>$request->input('MatP'),
            'CelularPadre'  =>$request->input('CelP'),
            'NombreMadre'   =>$request->input('NameM'),
            'APMadre'       =>$request->input('PatM'),
            'AMMadre'       =>$request->input('MatM'),
            'CelularMadre'  =>$request->input('CelM'),
            'Curp'          =>$request->input('CurpA'),
            'ActNacimiento' =>$request->input(''),
            'FolioAsignado' =>$request->input(''),
            'SecProcedencia'=>$request->input(''),
            'CertificadoSec'=>$request->input(''),
            'IdLoc'         =>$request->input('LocA'),
            'IdMun'         =>$request->input('MunA'),
            'IdFormAcademica'=>$request->input(''),
            'IdStatus'      =>$request->input(''),
        ]
    );
    //Session::flash('mensaje', 'Has creado una noticia');
    //return redirect('admin/Notificaciones'); 
}

}
