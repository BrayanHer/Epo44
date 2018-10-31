<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests;

    class RutasView extends Controller
    {
<<<<<<< HEAD
        public function index_Al()
        {
            return view('home');
        }
        public function V_Alumnos()
        {
            return view('Alumnos.Registro');
        }
        public function V_Padres()
        {
            return view('Alumnos.RegistroPadres');
        }
        public function V_Complemento(){
            return view('Alumnos.RegistroComplementos');
        }
        public function V_Acerca(){
            return view('ContenidoWeb.AcercaEpo');
        }
        public function V_Admin(){
            return view('Administrador');
        }
        public function V_Login(){
            return view('Admin.Login');
        }
        public function V_ins(){
            return view('Admin.Prueba');
        }
    }
=======
        return view('Alumnos.Registro');
    }
    public function V_Padres()
    {
        return view('Alumnos.RegistroPadres');
    }
    public function V_Complemento(){
        return view('Alumnos.RegistroComplementos');
    }
    public function V_Acerca(){
        return view('ContenidoWeb.AcercaEpo');
    }

    public function V_Admin(){
        return view('Administrador');
    }
    public function V_Login(){
        return view('Admin.Login');
    }
    public function V_ins(){
        return view('Admin.Prueba');
    }
    public function Vps(){
        return view('Admin.VistaP');
    }

}
>>>>>>> 15099b774427a76ba6fabaa04e74db928ba27fe6
