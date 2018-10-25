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

                    return redirect()->back();
            }
        
            public function Gcategorias(Request $request){
                    $IdCategoria=$request->IdCategoria;        
                    $Categoria=$request->Categoria;
                    
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

 }