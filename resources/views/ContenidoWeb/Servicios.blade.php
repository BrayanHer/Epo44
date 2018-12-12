@extends('home')
@section('homecontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="serv/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="serv/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="serv/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="serv/css/stylish-portfolio.min.css" rel="stylesheet">

</head>
<body>
     <!-- Services -->
     <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0"></h3>
          <h2 class="mb-5"></h2>
          <h2 class="mb-5">Servicios y Tramites</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <a href="{{route('Inscripciones')}}">
            <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-pencil-square-o"></i>
            </span>
            </a>
            <h4>
              <strong>Inscripciones</strong>
            </h4>
            
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
           <a href="{{route('Reinscripciones')}}">
           <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-handshake-o"></i>
            </span>
           </a>
            <h4>
              <strong>Reinscripciones</strong>
            </h4>
            
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
         <a href="{{route('Tramites')}}">
         <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-file-text"></i>
            </span>
         </a>
            <h4>
              <strong>Pagos</strong>
            </h4>
           
          </div>

        </div>
      </div>
    </section>
    <!-- Callout -->
    <section class="callout">
    </section>
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="serv/vendor/jquery/jquery.min.js"></script>
    <script src="serv/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="serv/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="serv/js/stylish-portfolio.min.js"></script>
</body>
</html>
@stop