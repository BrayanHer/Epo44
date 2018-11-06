<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\libros;
 use App\autores;
 use App\editoriales;
 use App\categorias;
 
    class Libro extends Controller
    {
        public function AltasL(){
            $clavequesigueL = libros::withTrashed()->orderBy('IdLibro', 'desc')
                                        ->take(1)
                                        ->get();
                if(count($clavequesigueL)==0){
                    $IdLibro = 1;
                }
                else{
                    $IdLibro = $clavequesigueL[0]->IdLibro + 1;
                }
                $Autores = Autores::withTrashed()->orderBy('Nombre', 'asc')->orderBy('APaterno', 'asc')
                                          ->get();
                $Editoriales = Editoriales::withTrashed()->orderBy('Editorial', 'asc')
                                          ->get();
                $Categorias = Categorias::withTrashed()->orderBy('Categoria', 'asc')
                                          ->get();
            //Consulta
                //$Libros = libros::withTrashed()->orderBy('IdLibro', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                                        // ->get();
                $Libros =\DB::select("SELECT l.IdLibro, l.Titulo, CONCAT(a.Nombre,' ',a.APaterno,' ',a.AMaterno) AS 'Autor' , e.Editorial, c.Categoria, l.Edicion, l.AnoPublicacion, l.delete_at
                FROM Libros AS l
                INNER JOIN Editoriales AS e ON e.IdEditorial = l.IdEditorial
                INNER JOIN Categorias AS c ON c.IdCategoria = l.IdCategoria
                INNER JOIN Autores AS a ON a.IdAutor = l.IdAutor");
 
                return view ("Biblioteca.Libros")
                    ->with('IdLibro', $IdLibro)
                    ->with('Autores', $Autores)
                    ->with('Editoriales', $Editoriales)
                    ->with('Categorias', $Categorias)
                    ->with('Libros', $Libros);
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
    }