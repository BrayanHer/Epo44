@extends('home')
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
</style>

    
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
            <div class="hidden-lg"><br><br></div>
                <h3 class="page-header">
                    
                    <small>Padres</small>
                </h3>
				<hr color="black" size=1>
            </div>
			<div id="mat"class="row col-md-12">
			<div class="form-group">
				<label for="ejemplo_email_1">Matricula</label>
				<input type="number" class="form-control" id=""
					placeholder="Introduce tu email">
					</div>
					</div>
			<div class="form-group col-md-4">
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id=""
					placeholder="Introduce tu email">
					</div>
			<div class="form-group col-md-4">
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Apellido Paterno">
			</div>
			<div class="form-group col-md-3">
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Apellido Materno">
			</div>

					<div class="form-group col-md-4">
				<label for="ejemplo_email_1">Edad</label>
				<input type="Number" class="form-control" min="0" max="23"id="">
					</div>
					<div class="form-group col-md-4">
				<label for="ejemplo_email_1">Sexo</label>
				<select type="text" class="form-control" id=""s>
					<option value="M">Selecciona:</option>
				<option value="M">Hombre</option>
				<option value="F">Mujer</option>
					</select>
					</div>

			<div class="form-group col-md-3">
				<label for="ejemplo_email_1">Fecha de nacimiento</label>
				<input type="date" class="form-control" id="ejemplo_email_1">
			</div>
			<div class="form-group col-md-4">
				<label for="ejemplo_email_1">Celuar</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Apellido Materno">
			</div>
			<div class="form-group col-md-4">
				<label for="ejemplo_email_1">Tel.Fijo</label>
				<input type="text" class="form-control" id=""
					placeholder="Introduce tu email">
					</div>
			<div class="form-group col-md-3">
				<label for="ejemplo_email_1">Correo Electronico</label>
				<input type="email" class="form-control" id="ejemplo_email_1">
			</div>
			<div class="form-group col-md-2">
				<label for="ejemplo_email_1">Num. Interior</label>
				<input type="number" min="0"class="form-control" id="ejemplo_email_1">
			</div>
			<div class="form-group col-md-2">
				<label for="ejemplo_email_1">Num. Exterior</label>
				<input type="number"min="0" class="form-control" id="ejemplo_email_1">
			</div>
			<div class="form-group col-md-2">
				<label for="ejemplo_email_1">Codigo Postal</label>
				<input type="number"min="0" class="form-control" id="ejemplo_email_1">
			</div>

			<div class="row col-md-12">

			<div class="form-group col-md-3">
				<label for="ejemplo_email_1">Estado</label>
				<input type="number"min="0" class="form-control" id="ejemplo_email_1">
			</div>

					<div class="form-group col-md-3">
				<label for="ejemplo_email_1">Municipio</label>
				<select type="text" class="form-control" id=""s>
					<option value="M">Selecciona:</option>
				<option value="">Lerma</option>
				<option value="">Temoaya</option>
					</select>
					</div>
					<div class="form-group col-md-3">
				<label for="ejemplo_email_1">Localidad</label>
				<select type="text" class="form-control" id=""s>
					<option value="M">Selecciona:</option>
				<option value="M">San Pedro Arriba</option>
				<option value="F">San Pedro Abajo</option>
					</select>
					</div>
					</div>
					<a href=""> 
						<button type="submit" class="btn btn-success btn-md">
 					    <span  aria-hidden="true"></span> Avanzar </button></a>

					


  

<!------------------------------------------------------------------------------------------------------------------------------------->			
  </div>
  </div>
</body>
</html>
	

@endsection
