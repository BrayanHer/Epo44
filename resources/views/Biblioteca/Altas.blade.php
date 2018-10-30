@extends('Administrador')
@section('admincontent')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#"> Inicio </a>
    </li>
    <li class="breadcrumb-item active"> Biblioteca </li>
  </ol>

  <h1 align="center"> Altas </h1>
	<br>
	<table>
		<Thead>
		<tr>
<!-- Autores -->
		<th>
		  <form action="{{route('GAutor')}}" method="POST" enctype='multipart/form-data'>                        
		    {{csrf_field()}}
		<!-- Button trigger modal -->
		    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AAutores">
		      Insertar Autor
		    </button>
		<!-- Modal -->
		    <div class="modal fade" id="AAutores" tabindex="-1" role="dialog" aria-labelledby="AAutoresLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="AAutoresLabel"> Insertar Autor </h5>
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
					    <label for="ejemplo_email_1"> Nombre </label>
					    <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{old('Nombre')}}" 
				                placeholder="Introduce su Nombre">
					</div>

				    @if($errors->first('APaterno')) 
				     <i> {{$errors->first('APaterno')}} </i> 
				    @endif	
					<div class="form-group col-xl-12">
						<label for="ejemplo_email_1"> Apellido Paterno </label>
						<input type="text" class="form-control" id="APaterno" name="APaterno" value="{{old('APaterno')}}" 
				        	    placeholder="Introduce su Apellido Paterno">
					</div>

				    @if($errors->first('AMaterno')) 
				     <i> {{$errors->first('AMaterno')}} </i> 
				    @endif
					<div class="form-group col-xl-12">
						<label for="ejemplo_email_1"> Apellido Materno </label>
						<input type="text" class="form-control" id="AMaterno" name="AMaterno" value="{{old('AMaterno')}}"
								placeholder="Introduce su Apellido Materno">
					</div>
				  </div>
      
	      		  <div class="modal-footer">
	        		<button type="submit" class="btn btn-success btn-md">
	 					<span  aria-hidden="true"></span> Enviar
	 				</button>
	      		  </div>
				</div>
	  		  </div>
			</div>   
  		  </form>
		</th>
		
		<th>
<!-- Editoriales -->
		<form action="{{route('GEditoriales')}}" method="POST" enctype='multipart/form-data'>                        
    		{{csrf_field()}}
  	<!-- Button trigger modal -->
		    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AEditoriales">
		      Insertar Editorial
		    </button>
		  <!-- Modal -->
		    <div class="modal fade" id="AEditoriales" tabindex="-1" role="dialog" aria-labelledby="AEditorialesLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="AEditorialesLabel"> Insertar Editorial </h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>
		  		
				  <div class="modal-body">
				    @if($errors->first('IdEditorial')) 
				     <i> {{$errors->first('IdEditorial')}} </i> 
		    		@endif
		    	  	<div class="form-group col-xl-2">
						<label for="ejemplo_email_1"> Clave </label>
						<input type="text" class="form-control" id="IdEditorial" name="IdEditorial" value="{{$IdEditorial}}" readonly='readonly'>
					</div>
		        
					@if($errors->first('Editorial')) 
					 <i> {{$errors->first('Editorial')}} </i> 
					@endif	
					<div class="form-group col-xl-12">
						<label for="ejemplo_email_1"> Editorial </label>
						<input type="text" class="form-control" id="Editorial" name="Editorial" value="{{old('Editorial')}}" 
													placeholder="Introduce la Editorial">
					</div>
		 		  </div>
      
				  <div class="modal-footer">
					<button type="submit" class="btn btn-success btn-md">
						<span  aria-hidden="true"></span> Enviar
					</button>
				  </div>
				</div>
	  		  </div>
			</div>   
  		</form>
		</th>

		<th>
		<!-- Categorias -->
		<form action="{{route('Gcategorias')}}" method="POST" enctype='multipart/form-data'>                        
    		{{csrf_field()}}
  		<!-- Button trigger modal -->
		    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdCategoria">
		      Insertar Categoría
		    </button>
		  <!-- Modal -->
		    <div class="modal fade" id="IdCategoria" tabindex="-1" role="dialog" aria-labelledby="IdCategoriaLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="IdCategoriaLabel"> Insertar Categoría </h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>

				  <div class="modal-body">
				    @if($errors->first('IdCategoria')) 
				     <i> {{$errors->first('IdCategoria')}} </i> 
		    		@endif
		    		<div class="form-group col-xl-2">
						<label for="ejemplo_email_1"> Clave </label>
						<input type="text" class="form-control" id="IdCategoria" name="IdCategoria" value="{{$IdCategoria}}" readonly='readonly'>
					</div>
		        
					@if($errors->first('Categoria')) 
					 <i> {{$errors->first('Categoria')}} </i> 
					@endif	
					<div class="form-group col-xl-12">
						<label for="ejemplo_email_1"> Categoría </label>
						<input type="text" class="form-control" id="Editorial" name="Categoria" value="{{old('Categoria')}}" 
													placeholder="Introduce la Categoria">
					</div>
		 		  </div>
      
				  <div class="modal-footer">
					<button type="submit" class="btn btn-success btn-md">
						<span  aria-hidden="true"></span> Enviar
					</button>
				  </div>
				</div>
	  		  </div>
			</div>   
  		</form>
		</th>

		<th>
		<!-- Libros -->
		<form action="{{route('Glibros')}}" method="POST" enctype='multipart/form-data'>                        
    		{{csrf_field()}}
  		<!-- Button trigger modal -->
		    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdLibros">
		      Insertar Libro
		    </button>
		  <!-- Modal -->
		    <div class="modal fade" id="IdLibros" tabindex="-1" role="dialog" aria-labelledby="IdLibrosLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="IdLibrosLabel"> Insertar Libro </h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>

				  <div class="modal-body">
				    @if($errors->first('IdLibro')) 
				     <i> {{$errors->first('IdLibro')}} </i> 
		    		@endif
		    		<div class="form-group col-xl-2">
							<label for="ejemplo_email_1"> Clave </label>
							<input type="text" class="form-control" id="IdLibro" name="IdLibro" value="{{$IdLibro}}" readonly='readonly'>
						</div>
		        
						@if($errors->first('Titulo')) 
						<i> {{$errors->first('Titulo')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Título </label>
							<input type="text" class="form-control" id="Editorial" name="Titulo" value="{{old('Titulo')}}" 
														placeholder="Introduce el Título">
						</div>

						Seleccione autor: 
							<select name='IdAutor'>
								@foreach($Autores as $au)
									<option value='{{$au->IdAutor}}'>{{$au->Nombre}} </option>
								@endforeach
							</select>
							<br>	<br>
						Seleccione Editorial: 
							<select name='IdEditorial'>
         				@foreach($Editoriales as $ed)
          				<option value='{{$ed->IdEditorial}}'>{{$ed->Editorial}} </option>
         				@endforeach
        			</select>

						@if($errors->first('Edicion')) 
						<i> {{$errors->first('Edicion')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Edición </label>
							<input type="text" class="form-control" id="Edicion" name="Edicion" value="{{old('Edicion')}}" 
														placeholder="Introduce la Edición">
						</div>

						@if($errors->first('AnoPublicacion')) 
						<i> {{$errors->first('AnoPublicacion')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Año Publicación </label>
							<input type="Date" class="form-control" id="AnoPublicacion" name="AnoPublicacion" value="{{old('AnoPublicacion')}}" 
	2w													placeholder="Introduce el Año Publicación">
						</div>

						Seleccione categoria: 
							<select name='IdCategoria'>
         				@foreach($Categorias as $ca)
          				<option value='{{$ca->IdCategoria}}'>{{$ca->Categoria}} </option>
         				@endforeach
        			</select>
		 		  </div>
      
				  <div class="modal-footer">
					<button type="submit" class="btn btn-success btn-md">
						<span  aria-hidden="true"></span> Enviar
					</button>
				  </div>
				</div>
	  		  </div>
			</div>   
  		</form>
		</th>

		</tr>
		</Thead>
	</table>
</body>
</html>
@endsection