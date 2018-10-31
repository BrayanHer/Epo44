<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\editoriales;

    class Editorial extends Controller
    {
        public function AltasE(){
            $clavequesigue = editoriales::orderBy('IdEditorial', 'desc')
                                            ->take(1)
                                            ->get();
            if(count($clavequesigue)==0){
                $IdEditorial = 1;
            }
            else{
                $IdEditorial = $clavequesigue[0]->IdEditorial + 1;
            }
            
            $Editoriales = editoriales::orderBy('IdEditorial', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                                            ->get();
            
            return view ("Biblioteca.Editoriales")
                ->with('IdEditorial', $IdEditorial)           
                ->with('Editoriales', $Editoriales);
    
        }
    
        public function GEditoriales(Request $request){
                $IdEditorial=$request->IdEditorial;        
                $Editorial=$request->Editorial;

                $this->validate($request,[
                    'IdEditorial'   => 'required|numeric',
                    'Editorial'    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
                ]);
                
                $Edi=new editoriales;
                $Edi->IdEditorial=$request->IdEditorial;
                $Edi->Editorial=$request->Editorial;
                $Edi->save();

                return redirect()->back();
        }
    }
