<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\categorias;

    class Categoria extends Controller
    {
        public function AltasC(){
            $clavequesigue = categorias::withTrashed()->orderBy('IdCategoria', 'desc')
                                                    ->take(1)
                                                    ->get();
                if(count($clavequesigue)==0){
                    $IdCategoria = 1;
                }
                else{
                    $IdCategoria = $clavequesigue[0]->IdCategoria + 1;
                }

                $Categorias = categorias::withTrashed()->orderBy('IdCategoria', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                                         ->get();
                return view ("Biblioteca.Categorias")
                    ->with('IdCategoria', $IdCategoria)
                    ->with('Categorias', $Categorias);
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
    }
