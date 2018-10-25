<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Alumnos;
use App\Municipios;
use App\Localidades;



class Alumno extends Controller
{
	
	public function Alumnos(){ 	 
     	 $Municipios = Municipios::orderBy('IdMun', 'asc')
     	 						->get();
	 	 $Localidades = Localidades::orderBy('IdLoc', 'asc')
     	 						->get();
				
     	 return view ("admin.Prueba")
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
			$this->validate($request,[
				'IdMatricula'   => 'required|numeric',
				'Nombre'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'APaterno'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'AMaterno'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'Edad'    		=>'required|integer|min:14',
				'Sexo'    		=>['regex:/^[A-Z]'],
				'FechaNac'    	=>'required|date',
				'Celular'    	=>['regex:/^[0-9]{10}$/'],
				'TelFijo'    	=>['regex:/^[0-9]{10}$/'],
				'Email'   		=> 'required|email',
				'NumInt'    	=>['regex:/^[A-Z,a-z, ,ñ,é,ó,á,í,ú,0-9]+$/'],
				'NumExt'    	=>['regex:/^[A-Z,a-z, ,ñ,é,ó,á,í,ú,0-9]+$/'],
				'CodigoPostal'  =>['regex:/^[0-9]{5}$/'],
				'Estado'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'IdMun'    		=>'required|numeric',
				'IdLoc'    		=>'required|numeric',
				'NombrePadre'   =>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'APPadre'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'AMPadre'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'CelularPadre'  =>['regex:/^[0-9]{10}$/'],
				'NombreMadre'   =>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'APMadre'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'AMMadre'    	=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'CelularMadre' =>['regex:/^[0-9]{10}$/'],
				'Curp'    		=>['regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}+$/'],
				'ActNacimiento' => 'image|mimes:jpeg,png,gif',
				'FolioAsignado' =>['regex:/^[0-9]{10}$/'],
				'CertificadoSec'=> 'image|mimes:jpeg,png,gif'

				
			]);
			
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