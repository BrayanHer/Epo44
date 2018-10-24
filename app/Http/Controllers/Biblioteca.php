<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use Illuminate\Support\Facades\Input;
 use Illuminate\Support\Facades\Response;
 use Illuminate\Support\Facades\Validator;
 use App\autores;
 use App\editoriales;

    class Biblioteca extends Controller
    {
        public function AltasB(){
        //Autores
            $clavequesigueA = autores::orderBy('IdAutor', 'desc') //::withTrashed()->orderBy()
                                            ->take(1)
                                            ->get();
            if(count($clavequesigueA)==0){
                $IdAutor = 1;
            }
            else{
                $IdAutor = $clavequesigueA[0]->IdAutor + 1;
            }
            
        //Editoriales
            $clavequesigueE = editoriales::orderBy('IdEditorial', 'desc')
                                                ->take(1)
                                                ->get();
            if(count($clavequesigueE)==0){
                $IdEditorial = 1;
            }
            else{
                $IdEditorial = $clavequesigueE[0]->IdEditorial + 1;
            }

            return view ("Biblioteca.Altas")
                ->with('IdAutor', $IdAutor)
                ->with('IdEditorial', $IdEditorial);
        }
    
        public function GAutor(Request $request){
            $IdAutor=$request->IdAutor;        
            $Nombre=$request->Nombre;
            $APaterno=$request->APaterno;
            $AMaterno=$request->AMaterno;
            
            $this->validate($request,[
                'IdAutor'=>'required|numeric',
				'Nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
                'APaterno'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
                'AMaterno'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
	
			]);
        
            $Aut=new autores;
            $Aut->IdAutor=$request->IdAutor;
            $Aut->Nombre=$request->Nombre;        
            $Aut->APaterno=$request->APaterno;
            $Aut->AMaterno=$request->AMaterno;
            $Aut->save();

            return redirect()->back();
        }

        public function Editoriales(){
            $clavequesigue = editoriales::withTrashed()->orderBy('IdEditorial', 'desc')
                                            ->take(1)
                                            ->get();
            if(count($clavequesigue)==0){
                $IdEditorial = 1;
            }
            else{
                $IdEditorial = $clavequesigue[0]->IdEditorial + 1;
            }
              
            return view ("Biblioteca.Altas")
                ->with('IdEditorial', $IdEditorial);
    
        }
    
        public function GEditoriales(Request $request){
                $IdEditorial=$request->IdEditorial;        
                $Editorial=$request->Editorial;
                
                $Edi=new editoriales;
                $Edi->IdEditorial=$request->IdEditorial;
                $Edi->Editorial=$request->Editorial;
                $Edi->save();
        }
    }