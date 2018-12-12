<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Alumnos;
use App\Municipios;
use App\Localidades;
use App\Usuarios;
use Session;


class Alumno extends Controller
{
	
	public function Alumnos(){ 	 
     	 $Municipios = Municipios::orderBy('IdMun', 'asc')
     	 						->get();
	 	 $Localidades = Localidades::orderBy('IdLoc', 'asc')
     	 						->get();
				
								  if(Session::get('sesionid')!="")
								  return view ("Alumnos.Registro")
								  ->with('Municipios', $Municipios)
								  ->with('Localidades', $Localidades);
								  else{
									  Session::flash('error', 'Debe iniciar sesion');
									  return redirect()->route('login');
								  }
     


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
			// dd($Celular);
			// ------------se utiliza para el login-----
		
			
			
			$User_name=$request->Nombre.' '.$request->APaterno;
			// dd($User_name);

			$this->validate($request,[
				'IdMatricula'   => 'required|numeric',
				'Nombre'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'APaterno'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'AMaterno'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'Edad'    		=>'required|integer|min:14',
				'Sexo'    		=>'required',['regex:/^[A-Z]'],
				'FechaNac'    	=>'required|date',
				'Celular'    	=>'required',['regex:/^[0-9]{10}$/'],
				'TelFijo'    	=>'required',['regex:/^[0-9]{10}$/'],
				'Email'   		=> 'required|email',
				'NumInt'    	=>'required',['regex:/^[A-Z,a-z, ,ñ,é,ó,á,í,ú,0-9]+$/'],
				'NumExt'    	=>'required',['regex:/^[A-Z,a-z, ,ñ,é,ó,á,í,ú,0-9]+$/'],
				'CodigoPostal'  =>'required',['regex:/^[0-9]{5}$/'],
				'Estado'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'IdMun'    		=>'required|numeric',
				'IdLoc'    		=>'required|numeric',
				'NombrePadre'   =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'APPadre'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'AMPadre'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'CelularPadre'  =>'required',['regex:/^[0-9]{10}$/'],
				'NombreMadre'   =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'APMadre'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'AMMadre'    	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
				'CelularMadre' =>'required',['regex:/^[0-9]{10}$/'],
				'Curp'    		=>'required',['regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}+$/'],
				'ActNacimiento' =>'required', 'image|mimes:jpeg,png,gif',
				'FolioAsignado' =>'required',['regex:/^[0-9]{10}$/'],
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
			
// dd($Per->Celular=$request->Celular);
			$Per->save();

			$login = new Usuarios;
			$login->nombre=$User_name;
			$login->correo=$request->Email;
			$login->usuario=$request->Nombre;
			$login->password=$request->IdMatricula;
			$login->tipo='Alumno';
			$login->Registro='si';

			$login->save();
		
		Session::flash('mensaje','Tu usaurio para ingesar es :  '.$Nombre.' y Tu contraseña sera  ' . $IdMatricula);	
			return redirect()->back();
		

	}

	public function C_alumno(){
		$Alumnos=Alumnos::withTrashed()->orderBy('IdMatricula','asc')->get();

		if(Session::get('sesionid')!="")
		return view('Alumnos.Consulta')
		->with('Alumnos',$Alumnos);
								  else{
									  Session::flash('error', 'Debe iniciar sesion');
									  return redirect()->route('login');
								  }
		
	}

	public function Des_Alumno($IdMatricula)
    {
        Alumnos::find($IdMatricula)->delete();

        return redirect()->back();  
    }
    //Activación
    public function Act_Alumno($IdMatricula)
    {
        Alumnos::withTrashed()->where('IdMatricula',$IdMatricula)->restore();

        return redirect()->back();
    }
    //Eliminación Física
public function Del_Alumno($IdMatricula){
    Alumnos::withTrashed()->where('IdMatricula',$IdMatricula)->forceDelete();
    return redirect()->back();
}
}