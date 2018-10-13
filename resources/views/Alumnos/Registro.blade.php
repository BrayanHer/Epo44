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
		<div class="col-md-12">
            <div class="hidden-lg"></div>
                <h3 class="page-header">
                    <small>Alumno</small>
                </h3>
				<hr color="black" size=1>
        </div>
			<div id="mat"class="row col-xl-12">
			 <div class="form-group">
				<label for="ejemplo_email_1">Matrícula</label>
				<input type="number" class="form-control" id=""
					placeholder="Introduce tu Matrícula" min="1">
			 </div>
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id=""
					placeholder="Introduce tu Nombre">
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Apellido Paterno">
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Apellido Materno">
			</div>

			<div class="form-group col-xl-1">
				<label for="ejemplo_email_1">Edad</label>
				<input type="Number" class="form-control" min="0" max="18"id="">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Sexo</label>
				<select type="text" class="form-control" id="">
					<option value="M">Selecciona:</option>
					<option value="M">Hombre</option>
					<option value="F">Mujer</option>
				</select>
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Fecha de Nacimiento</label>
				<input type="date" class="form-control" id="ejemplo_email_1" >
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">CURP</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu CURP">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Celular</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Celular">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Tel. Fijo</label>
				<input type="text" class="form-control" id=""
					placeholder="Introduce tu Tel. Fijo">
			</div>

			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Correo Electrónico</label>
				<input type="email" class="form-control" id="ejemplo_email_1" 
					placeholder="Introduce tu Correo Electrónico">
			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Calle</label>
				<input type="text" class="form-control" id=""
					placeholder="Introduce tu Calle">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Núm. Interior</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Núm. Int.">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Núm. Exterior</label>
				<input type="text" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu Núm. Ext.">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Código Postal</label>
				<input type="number"min="0" class="form-control" id="ejemplo_email_1"
					placeholder="Introduce tu CP">
			</div>

		  	<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Estado</label>
				<input type="number"min="0" class="form-control" id="ejemplo_email_1"
					placeholder="Estado de México">
			</div>

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Municipio</label>
				<select type="text" class="form-control" id=""s>
					<option value="M">Selecciona:</option>
					<option value="">Lerma</option>
					<option value="">Temoaya</option>
				</select>
			</div>
			
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Localidad</label>
				<select type="text" class="form-control" id=""s>
					<option value="M">Selecciona:</option>
					<option value="M">San Pedro Arriba</option>
					<option value="F">San Pedro Abajo</option>
				</select>
			</div>
			

				<a href="{{route('Complemento')}}"> 
				<button type="submit" class="btn btn-success btn-md">
 				<span  aria-hidden="true"></span> Avanzar </button></a>

					




<!------------------------------------------------------------------------------------------------------------------------------------->			
</div>
</div>
</body>
</html>
	

@endsection
