<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Maestros;
use App\Usuarios;
use App\Http\Requests;


class Maestro extends Controller
{

    public function Maestros()
    {
        $clavequesigueA = Maestros::withTrashed()->orderBy('IdMaestro', 'desc')
                                        ->take(1)
                                        ->get();
                if(count($clavequesigueA)==0){
                    $IdMaestro = 1;
                }
                else{
                    $IdMaestro = $clavequesigueA[0]->IdMaestro + 1;
                }

                if(Session::get('sesionidu')!="")
                return view('Maestros.Registro')
                ->with('IdMaestro',$IdMaestro);
                                          else{
                                              Session::flash('error', 'Debe iniciar sesion');
                                              return redirect()->route('login');
                                          }


    }

    public function C_Maestros(){

        $Maestros = Maestros::withTrashed()->orderBy('IdMaestro', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
        ->get();

        if(Session::get('sesionidu')!="")
        return view('Maestros.Consulta')
        ->with('Maestros',$Maestros);
                                  else{
                                      Session::flash('error', 'Debe iniciar sesion');
                                      return redirect()->route('login');
                                  }

        
    }

    public function G_Maestro(Request $request)
    {
        $IdMaestro=$request->IdMaestro;
        $Nombre=$request->NombreM;
        $Apaterno=$request->Apaterno;
        $Amaterno=$request->Amaterno;
        $Correo=$request->Correo;
        $Matricula=$request->matricula;

        $this->validate($request,[

            'IdMaestro' =>'required|numeric',
            'NombreM'     =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'Apaterno'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'Amaterno'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'Correo'      =>'required|email'

        ]);

        $User_name=$request->NombreM.' '.$request->Apaterno;
        
        $Mar=new Maestros;
        $Mar->IdMaestro=$request->IdMaestro;
        $Mar->NombreM=$request->NombreM;
        $Mar->APaterno=$request->Apaterno;
        $Mar->AMaterno=$request->Amaterno;
        $Mar->Correo=$request->Correo;
        $Mar->Matricula=$request->matricula;
        $Mar->save();

            $login = new Usuarios;
			$login->nombre=$User_name;
			$login->correo=$request->Correo;
			$login->usuario=$request->NombreM;
			$login->password=$request->matricula;
            $login->tipo='Maestro';
            $login->Registro='si';
            $login->save();


            
            Session::flash('mensaje','Tu usaurio para ingesar es : '.$Nombre.'  y Tu contraseña sera  :'.$Matricula.'');	
            return redirect()->back();

    }
    //Eliminación Lógica
    public function Des_Maestro($IdMaestro)
    {
        Maestros::find($IdMaestro)->delete();

        return redirect()->back();  
    }
    //Activación
    public function Act_Maestro($IdMaestro)
    {
        Maestros::withTrashed()->where('IdMaestro',$IdMaestro)->restore();

        return redirect()->back();
    }
    //Eliminación Física
public function Del_Categoria($IdMaestro){
    Maestros::withTrashed()->where('IdMaestro',$IdMaestro)->forceDelete();
    return redirect()->back();
}
    
}






