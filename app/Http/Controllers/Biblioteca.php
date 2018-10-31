<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\autores;
 use App\editoriales;
 use App\categorias;
 use App\libros;

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
    
            //Categorias
                $clavequesigueC = categorias::orderBy('IdCategoria', 'desc')
                                                    ->take(1)
                                                    ->get();
                if(count($clavequesigueC)==0){
                    $IdCategoria = 1;
                }
                else{
                    $IdCategoria = $clavequesigueC[0]->IdCategoria + 1;
                }

            //Libros
                $clavequesigueL = libros::orderBy('IdLibro', 'desc')
                                                ->take(1)
                                                ->get();
                if(count($clavequesigueL)==0){
                    $IdLibro = 1;
                }
                else{
                    $IdLibro = $clavequesigueL[0]->IdLibro + 1;
                }
                $Autores = Autores::orderBy('Nombre', 'asc')
                                          ->get();
                $Editoriales = Editoriales::orderBy('Editorial', 'asc')
                                          ->get();
                $Categorias = Categorias::orderBy('Categoria', 'asc')
                                          ->get();

                return view ("Biblioteca.Altas")
                    ->with('IdAutor', $IdAutor)
                    ->with('IdEditorial', $IdEditorial)
                    ->with('IdCategoria', $IdCategoria)
                    ->with('IdLibro', $IdLibro)
                    ->with('Autores', $Autores)
                    ->with('Editoriales', $Editoriales)
                    ->with('Categorias', $Categorias);
            }

            public function GAutor(Request $request){
                $IdAutor=$request->IdAutor;        
                $Nombre=$request->Nombre;
                $APaterno=$request->APaterno;
                $AMaterno=$request->AMaterno;		 


                $this->validate($request,[
                    'IdAutor'   => 'required|numeric',
                    'Nombre'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'APaterno'  =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                    'AMaterno'  =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);

                $Aut=new autores;
                $Aut->IdAutor=$request->IdAutor;
                $Aut->Nombre=$request->Nombre;        
                $Aut->APaterno=$request->APaterno;
                $Aut->AMaterno=$request->AMaterno;
                $Aut->save();

                return redirect()->back();
            }

            
            public function Gcategorias(Request $request){
                    $IdCategoria=$request->IdCategoria;        
                    $Categoria=$request->Categoria;
                    $this->validate($request,[
                        'IdCategoria'   => 'required|numeric',
                        'Categoria'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                    ]);
                    $Cat=new categorias;
                    $Cat->IdCategoria=$request->IdCategoria;
                    $Cat->Categoria=$request->Categoria;
                    $Cat->save();	 
                    return redirect()->back(); 
            }
       
            public function Glibros(Request $request){
                    $IdLibro=$request->IdLibro;        
                    $Titulo=$request->Titulo;
                    $IdAutor=$request->IdAutor;        
                    $IdEditorial=$request->IdEditorial;
                    $Edicion=$request->Edicion;        
                    $AnoPublicacion=$request->AnoPublicacion;
                    $IdCategoria=$request->IdCategoria;
                    
                    $this->validate($request,[
                        'IdLibro'   => 'required|numeric',
                        'Titulo'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                        'IdAutor'   => 'required|numeric',
                        'IdEditorial'  => 'required|numeric',
                        'Edicion'  =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
                        'AnoPublicacion'    => 'required|date',
                        'IdCategoria'   => 'required|numeric',
                        
                    ]);

                    $Lib=new libros;
                    $Lib->IdLibro=$request->IdLibro;
                    $Lib->Titulo=$request->Titulo;
                    $Lib->IdAutor=$request->IdAutor;
                    $Lib->IdEditorial=$request->IdEditorial;
                    $Lib->Edicion=$request->Edicion;
                    $Lib->AnoPublicacion=$request->AnoPublicacion;
                    $Lib->IdCategoria=$request->IdCategoria;
                    $Lib->save();
                    return redirect()->back();
            }

            public function ReporteAutores(){
                $Autores = autores::withTrashed()->orderBy('Idm', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                                         ->get();
                 return view('Biblioteca.Altas')
                        ->with('Autores', $Autores);
               }
 }