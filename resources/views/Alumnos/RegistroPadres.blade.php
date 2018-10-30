@extends('Home')
@section('homecontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
* {
	margin:1px;
	padding:1px;
}
 
body {
	background:#fff;
}
.container{
	background:;
}
hr{
	width:90%;
}
.mat{
	background:#ccc;
}
::-webkit-input-placeholder { /* Chrome */
	font-size: 13px;
}

::-moz-placeholder{
	font-size: 13px;
}
</style>

    
<body>
<div class="container">
<div class="row">
		<div class="col-xl-12">
            <div class="hidden-lg"></div>
                <h3 class="page-header">
                    <small>Datos del Padre</small>
                </h3>
				<hr color="black" size=1>
        </div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id="Namep" name="Namep"
					placeholder="Introduce su Nombre">
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control" id="patP" name="patP"
					placeholder="Introduce su Apellido Paterno">
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="MatP" name="MatP"
					placeholder="Introduce su Apellido Materno">
			</div>

			
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Celular</label>
				<input type="text" class="form-control" id="CelP" name="CelP"
					placeholder="Introduce su Número Celular">
			</div>
			<br><br>

		<div class="col-xl-12">
            <div class="hidden-lg"></div>
                <h3 class="page-header">
                    <small>Datos del la Madre</small>
                </h3>
				<hr color="black" size=1>
        </div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control"id="NameM" name="NameM"
					placeholder="Introduce su Nombre">
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control"id="PatM" name="PatM"
					placeholder="Introduce su Apellido Paterno">
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="MatM" name="MatM"
					placeholder="Introduce su Apellido Materno">
			</div>

			
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Celular</label>
				<input type="number" class="form-control" id="CelM" name="CelM"
					placeholder="Introduce Número Celular">
			</div>	

<!------------------------------------------------------------------------------------------------------------------------------------->			
  </div>
  <div >
				<button type="submit" class="btn btn-success btn-md">
 				<span  aria-hidden="true"></span> Enviar </button>
			</div>
  </div>
</body>
</html>
	

@endsection
