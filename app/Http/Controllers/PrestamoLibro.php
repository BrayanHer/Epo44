<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;

 use App\libros;
 use App\autores;
 use App\editoriales;
 use App\categorias;
 use App\prestamoLibros;
 use App\alumnos;

    class PrestamoLibro extends Controller
    {
        public function AltasP(){
            $clavequesigueP = prestamoLibros::withTrashed()->orderBy('IdPrestamo', 'desc')
                                                                ->take(1)
                                                                ->get();
                if(count($clavequesigueP)==0){
                    $IdPrestamo = 1;
                }
                else{
                    $IdPrestamo = $clavequesigueP[0]->IdPrestamo + 1;
                }
                $Libros = libros::withTrashed()->orderBy('Titulo')
                                                    ->get();
                $Alumnos = alumnos::withTrashed()->orderBy('IdMatricula')
                                          ->get();
            
                //$Prestamo = prestamolibros::withTrashed()->orderBy('IdPrestamo', 'asc') //withTrashed -> todos ->eliminados (lógico) o no
                  //                                        ->get();
                $Prestamo =\DB::select("SELECT p.IdPrestamo, CONCAT(a.IdMatricula,' ',a.Nombre,' ',a.APaterno,' ',a.AMaterno) AS 'Alumno' , l.Titulo, p.FechaPrestamo, p.FechaEntrega, p.delete_at
                FROM prestamolibros AS p
                INNER JOIN Alumnos AS a ON a.IdMatricula = p.IdMatricula
                INNER JOIN Libros AS l ON l.IdLibro = p.IdLibro");
                                                          
                return view ("Biblioteca.PrestamoLibros")
                    ->with('IdPrestamo', $IdPrestamo)
                    ->with('Libros', $Libros)
                    ->with('Alumnos', $Alumnos)
                    ->with('Prestamo', $Prestamo);
            }
       
            public function GPrestamo(Request $request){
                $IdPrestamo=$request->IdPrestamo;        
                $IdMatricula=$request->IdMatricula;
                $IdLibro=$request->IdLibro;        
                $FechaPrestamo=$request->FechaPrestamo;
                $FechaEntrega=$request->FechaEntrega;
                    
                $this->validate($request,[
                    'IdPrestamo'   => 'required|numeric',
                    'IdMatricula'    =>'required|numeric',
                    'IdLibro'   => 'required|numeric',
                    'FechaPrestamo'    => 'required|date',
                    'FechaEntrega'   => 'required|date',                        
                ]);

                    $Lib=new prestamoLibros;
                    $Lib->IdPrestamo=$request->IdPrestamo;
                    $Lib->IdMatricula=$request->IdMatricula;
                    $Lib->IdLibro=$request->IdLibro;
                    $Lib->FechaPrestamo=$request->FechaPrestamo;
                    $Lib->FechaEntrega=$request->FechaEntrega;
                    $Lib->save();
                    return redirect()->back();
            }
    }