<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Alumnos;
use App\Autores;
use App\Editoriales;
use App\Categorias;
use App\Municipios;
use App\Materias;
use App\Maestros;
use App\tipoBajas;
use App\Libros;
use App\Localidades;
use App\Cursos;
use App\grupos;
use App\Periodos;
use App\Turnos;
use App\PrestamoLibros;
use App\Formaciones;
use App\Tramites;
use App\StatusEstudiantes;


class Alumno extends Controller
{
	
	public function Alumnos(){ 	 
     	 $Municipios = Municipios::orderBy('IdMun', 'asc')
     	 						->get();
	 	 $Localidades = Localidades::orderBy('IdLoc', 'asc')
     	 						->get();
				
     	 return view ("Alumnos.Registro")
				->with('Municipios', $Municipios)
				->with('Localidades', $Localidades);


	}

	public function GAlumnos(Request $request){
			$IdMatricula=$request->IdMatricula;        
			$Nombre=$request->Nombre;
			$APaterno=$request->APaterno;
			$AMaterno=$request->AMaterno;        
			$Edad=$request->Edad;
			$Sexo=$request->Sexo;
			$FechaNac=$request->FechaNac;        
			$Celular=$request->Celular;
			$TelFijo=$request->TelFijo;
			$Email=$request->Email;        
			$Calle=$request->Calle;
			$NumInt=$request->NumInt;
			$NumExt=$request->NumExt;        
			$CodigoPostal=$request->CodigoPostal;
			$Estado=$request->Estado;
			$IdMun=$request->IdMun;        
			$IdLoc=$request->IdLoc;
			$NombrePadre=$request->NombrePadre;
			$APPadre=$request->APPadre;
			$AMPadre=$request->AMPadre;        
			$CelularPadre=$request->CelularPadre;
			$NombreMadre=$request->NombreMadre;
			$APMadre=$request->APMadre;        
			$AMMadre=$request->AMMadre;
			$CelularMadre=$request->CelularMadre;
			$Curp=$request->Curp;        
			$ActNacimiento=$request->ActNacimiento;
			$FolioAsignado=$request->FolioAsignado;
			$SecProcedencia=$request->SecProcedencia;        
			$CertificadoSec=$request->CertificadoSec;
			
			
			$Per=new Alumnos;
			$Per->IdMatricula=$request->IdMatricula;
			$Per->Nombre=$request->Nombre;
			$Per->APaterno=$request->APaterno;
			$Per->AMaterno=$request->AMaterno;
			$Per->Edad=$request->Edad;
			$Per->Sexo=$request->Sexo;
			$Per->FechaNac=$request->FechaNac;
			$Per->Celular=$request->Celular;
			$Per->TelFijo=$request->TelFijo;
			$Per->Email=$request->Email;
			$Per->Calle=$request->Calle;
			$Per->NumInt=$request->NumInt;
			$Per->NumExt=$request->NumExt;
			$Per->CodigoPostal=$request->CodigoPostal;
			$Per->Estado=$request->Estado;
			$Per->IdMun=$request->IdMun;
			$Per->IdLoc=$request->IdLoc;
			$Per->NombrePadre=$request->NombrePadre;
			$Per->APPadre=$request->APPadre;
			$Per->AMPadre=$request->AMPadre;
			$Per->CelularPadre=$request->CelularPadre;
			$Per->NombreMadre=$request->NombreMadre;
			$Per->APMadre=$request->APMadre;
			$Per->AMMadre=$request->AMMadre;
			$Per->CelularMadre=$request->CelularMadre;
			$Per->Curp=$request->Curp;
			$Per->ActNacimiento=$request->ActNacimiento;
			$Per->FolioAsignado=$request->FolioAsignado;
			$Per->SecProcedencia=$request->SecProcedencia;
			$Per->CertificadoSec=$request->CertificadoSec;
			$Per->save();
	}
}