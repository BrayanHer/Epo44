<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administrador</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
</head>
<style>
#Bag{
  color:rgb(0, 86, 179);
}
</style>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><i class="fa fa-user"></i> &nbsp;
      {{Session::get('sesionname')}}
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">  
<!-- Lista de maestros -->
      @if(Session::get('sesiontipo')=="Maestro" || Session::get('sesiontipo')=="Admin" )
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Maestros">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-users"></i>
            <span class="nav-link-text">Maestros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="#">Estudiantes</a>
            </li>
            <li>
              <a href="#">Tareas</a>
            </li>
          </ul>
        </li>
<!-- fin de lista de maestros -->
      @endif
      @if(Session::get('sesiontipo')=="Alumno" || Session::get('sesiontipo')=="Admin")
<!-- inicio de lista de Alumnos -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fa fa-graduation-cap"></i>
            <span class="nav-link-text">Alumnos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="#">Tareas</a>
            </li>
          @if(Session::get('sesionreg')=="si")
            
          @else
            <li>
              <a href="{{route('Alumnos')}}">Información Personal</a>
            </li>
          @endif
             <li>
              <a href="#">Foros</a>
            </li>
          </ul>
        </li>
<!-- fin de lista de alumnos -->
      @endif
      @if(Session::get('sesiontipo')=="Biblioteca" || Session::get('sesiontipo')=="Admin")
<!-- inicio de lista biblioteca -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biblioteca">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
          <i class="fa fa-book"></i>
            <span class="nav-link-text">Biblioteca</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="{{route('AltasP')}}">Prestamo de Libros</a>
            </li>
            <li>
              <a href="{{route('AltasL')}}">Libros</a>
            </li>
            <li>
              <a href="{{route('AltasA')}}">Autores</a>
            </li>
            <li>
              <a href="{{route('AltasE')}}">Editoriales</a>
            </li>
            <li>
              <a href="{{route('AltasC')}}">Categorias</a>
            </li>
          </ul>
      @endif
      @if(Session::get('sesiontipo')=="Admin")
<!-- fin de lista biblioteca -->
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrador">
          <a class="nav-link" href="{{route('Administracion')}}">
          <i class="fa fa-sliders"></i>
            <span class="nav-link-text">Administrador</span>
          </a>
        </li>
      @endif
        <!-- -------------------------aqui se cierran los endif--- -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Busca por...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a id="Bag"href="#">Administrador</a>
        </li>
        <li class="breadcrumb-item active">Admnistración del sistema</li>
      </ol>
      <div   class="cotainer col-md-12">
        <div class="row">
    <!-- aqui va el calendario -->
          <div class="col-sm-7"></div>
<!-- Aqui finaliza -->
          <div class="row">
            <br><br>
          </div>
    <!-- aqui terminan los correos -->
        </div>
      </div>
    <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
          <!-- numeros de soporte tecnico y correos -->
            <small></small>
<!-- termina coreros y soporte -->
          </div>
        </div>
      </footer>
    <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
    <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres salir?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-primary" href="{{route('Login')}}">Cerrar Sesión</a>
            </div>
          </div>
        </div>
      </div>
                  
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <!-- Page level plugin JavaScript-->
      <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
      <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
      <!-- Custom scripts for this page-->
      <script src="{{asset('admin/js/sb-admin-datatables.min.js')}}"></script>
      <script src="{{asset('admin/js/sb-admin-charts.min.js')}}"></script>
    </div>
    <div>
      @yield('admincontent')
    </div>
  </div>
  <div>
                        @yield('admincontent')
                  </div> 
</body>

</html>
