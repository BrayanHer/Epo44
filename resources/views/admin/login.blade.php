
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
      Iniciar Sesión
      </div>
      <div class="card-body">
      <form action="{{route('iniciasesion')}}" method="POST">
      {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input class="form-control" id="usuario" name="usuario" type="Text" placeholder="Introduzca tu Usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Introduzca tu Contraseña">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordar Contraseña</label>
            </div>
          </div>
          <a>
          <input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesión">
          </a>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.html">¿Olvidaste tu Contraseña?</a>
        </div>

<b style="color:Red;">@if(Session::has('error'))</b>
    <div>
    <b style="color:Red;">
    {{Session::get('error')}}
    </b>
    </div>
    <script>
    alert("{{Session::get('error')}}");
    </script>
    @endif

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
