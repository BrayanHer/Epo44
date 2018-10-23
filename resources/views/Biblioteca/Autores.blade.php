@extends('home')
@section('homecontent')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
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
<br>
<h1 align="center"> Autores </h1>

<form action="{{route('GAutores')}}" method="POST" enctype='multipart/form-data'>                        
    {{csrf_field()}}

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Insertar Autor
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Autor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


            @if($errors->first('IdAutor')) 
             <i> {{$errors->first('IdAutor')}} </i> 
            @endif
            <div class="form-group col-xl-2">
				<label for="ejemplo_email_1"> Clave </label>
				<input type="text" class="form-control" id="IdAutor" name="IdAutor" value="{{$IdAutor}}" readonly='readonly'>
			</div>
        

            @if($errors->first('Nombre')) 
             <i> {{$errors->first('Nombre')}} </i> 
            @endif	
			<div class="form-group col-xl-12">
				<label for="ejemplo_email_1">Nombre</label>
				<input type="text" class="form-control" id="Nombre" name="Nombre" value="{{old('Nombre')}}"
					placeholder="Introduce su Nombre">
			</div>


            @if($errors->first('APaterno')) 
             <i> {{$errors->first('APaterno')}} </i> 
            @endif	
			<div class="form-group col-xl-12">
				<label for="ejemplo_email_1">Apellido Paterno</label>
				<input type="text" class="form-control" id="APaterno" name="APaterno" value="{{old('APaterno')}}"
					placeholder="Introduce su Apellido Paterno">
			</div>


            @if($errors->first('AMaterno')) 
             <i> {{$errors->first('AMaterno')}} </i> 
            @endif
			<div class="form-group col-xl-12">
				<label for="ejemplo_email_1">Apellido Materno</label>
				<input type="text" class="form-control" id="AMaterno" name="AMaterno" value="{{old('AMaterno')}}"
					placeholder="Introduce su Apellido Materno">
			</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success btn-md">
 		<span  aria-hidden="true"></span> Enviar </button>
      </div>
    </div>
  </div>
</div>   
    </form>
</body>
</html>
@endsection