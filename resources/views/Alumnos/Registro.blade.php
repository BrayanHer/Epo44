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
<form action="{{route('Alumnos')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
<div class="container">
<div class="row">
		<div class="col-md-12">
            <div class="hidden-lg"></div>
                <h3 class="page-header">
                    <small>Alumno</small>
                </h3>
				<hr color="black" size=1>
        </div>

@if($errors->first('IdMatricula')) 
<i> {{ $errors->first('IdMatricula') }} </i> 
@endif

			<div id="mat"class="row col-xl-12">
			 <div class="form-group">
				<label for="ejemplo_email_1">Matrícula</label>
				<input type="number" class="form-control" id="IdMatricula" name="IdMatricula"
					placeholder="Introduce tu Matrícula" min="1">
			 </div>
@if($errors->first('Nombre')) 
<i> {{ $errors->first('Nombre') }} </i> 
@endif

			</div>

			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id="Nombre" name="Nombre"
					placeholder="Introduce tu Nombre">
			</div>
@if($errors->first('APaterno')) 
<i> {{ $errors->first('APaterno') }} </i> 
@endif
			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control"id="APaterno" name="APaterno"
					placeholder="Introduce tu Apellido Paterno">
			</div>
@if($errors->first('AMaterno')) 
<i> {{ $errors->first('AMaterno') }} </i> 
@endif
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="AMaterno" name="AMaterno"
					placeholder="Introduce tu Apellido Materno">
			</div>
@if($errors->first('Edad')) 
<i> {{ $errors->first('Edad') }} </i> 
@endif
			<div class="form-group col-xl-1">
				<label for="ejemplo_email_1">Edad</label>
				<input type="Number" class="form-control" min="0" max="21" id="Edad" name="Edad">
			</div>

@if($errors->first('Sexo')) 
<i> {{ $errors->first('Sexo') }} </i> 
@endif
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Sexo</label>
				<select type="text" class="form-control" id="Sexo" name="Sexo">
					<option value="M">Selecciona:</option>
					<option value="M">Hombre</option>
					<option value="F">Mujer</option>
				</select>
			</div>
@if($errors->first('FechaNac')) 
<i> {{ $errors->first('FechaNac') }} </i> 
@endif
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Fecha de Nacimiento</label>
				<input type="date" class="form-control" id="FechaNac" name="FechaNac" >
			</div>

@if($errors->first('Curp')) 
<i> {{ $errors->first('Curp') }} </i> 
@endif
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">CURP</label>
				<input type="text" class="form-control" id="Curp" name="Curp"
					placeholder="Introduce tu CURP">
			</div>

@if($errors->first('Celular')) 
<i> {{ $errors->first('Celular') }} </i> 
@endif
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Celular</label>
				<input type="text" class="form-control" id="Celular" name="Celular"
					placeholder="Introduce tu Celular">
			</div>

@if($errors->first('TelFijo')) 
<i> {{ $errors->first('TelFijo') }} </i> 
@endif
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Tel. Fijo</label>
				<input type="text" class="form-control" id="TelFijo" name="TelFijo"
					placeholder="Introduce tu Tel. Fijo">
			</div>

@if($errors->first('Email')) 
<i> {{ $errors->first('Email') }} </i> 
@endif
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Correo Electrónico</label>
				<input type="email" class="form-control" id="Email" name="Email"
					placeholder="Introduce tu Correo Electrónico">
			</div>

@if($errors->first('Calle')) 
<i> {{ $errors->first('Calle') }} </i> 
@endif
			<div class="form-group col-xl-4">
				<label for="ejemplo_email_1">Calle</label>
				<input type="text" class="form-control" id="Calle" name="Calle"
					placeholder="Introduce tu Calle">
			</div>

@if($errors->first('NumInt')) 
<i> {{ $errors->first('NumInt') }} </i> 
@endif
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Núm. Interior</label>
				<input type="text" class="form-control" id="NumInt" name="NumInt"
					placeholder="Introduce tu Núm. Int.">
			</div>

@if($errors->first('NumExt')) 
<i> {{ $errors->first('NumExt') }} </i> 
@endif
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Núm. Exterior</label>
				<input type="text" class="form-control" id="NumExt" name="NumExt"
					placeholder="Introduce tu Núm. Ext.">
			</div>

@if($errors->first('CodigoPostal')) 
<i> {{ $errors->first('CodigoPostal') }} </i> 
@endif
			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Código Postal</label>
				<input type="number"min="0" class="form-control" id="CodigoPostal" name="CodigoPostal"
					placeholder="Introduce tu CP">
			</div>

@if($errors->first('Estado')) 
<i> {{ $errors->first('Estado') }} </i> 
@endif
		  	<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Estado</label>
				<input type="number"min="0" class="form-control" id="Estado" name="Estado"
					placeholder="Estado de México" value="Estado de México" readonly>
			</div>

@foreach($Municipios as $muni)

			<div class="form-group col-xl-2">
				<label for="ejemplo_email_1">Municipio</label>
				<select type="text" class="form-control" >
					<option value="M">Selecciona:</option>
					<option value="{{$muni->IdMun}}">{{$muni->Municipios}}</option>
				</select>
			</div>
@endforeach

@foreach($Localidades as $loc)
			<div class="form-group col-xl-3">
				<label for="ejemplo_email_1">Localidad</label>
				<select type="text" class="form-control" id="LocA" name="LocA">
					<option value="M">Selecciona:</option>
					<option value="{{$loc->IdLoc}}">{{$loc->Localidad}}</option>
				</select>
			</div>
@endforeach
			
<div>
<button type="submit" class="btn btn-success btn-md">Avanzar </button>
</div>
				
<!------------------------------------------------------------------------------------------------------------------------------------->			
</div>
</div>
</form>
</body>
</html>
	

@endsection
