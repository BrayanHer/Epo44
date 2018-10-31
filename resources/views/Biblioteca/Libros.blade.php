@extends('Administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
</style>

<div class="container">
	<div class="row">
        <form action="{{route('Glibros')}}" method="POST" enctype='multipart/form-data'>                        
    		{{csrf_field()}}
				<div class="alert alert-primary col-md-12" role="alert">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdLibros">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nuevo "Libro"
				</div>
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
		
		<div class="col-md-12">
            <div class="hidden-lg"></div>
            <h3 class="page-header">
                <small>Registros Obtenidos</small>
            </h3>
			<hr color="black" size=1>
        </div>
        <div class="col-md-10"> 
			<table class="table">
				<thead class="thead-dark col-md-10">
					<tr>
						<th scope="col-md-10">Clave</th>
						<th scope="col-md-10">Titulo</th>
                        <th scope="col-md-10">Autor</th>
						<th scope="col-md-10">Editorial</th>
						<th scope="col-md-10">Edición</th>
						<th scope="col-md-10">Año de Publicación</th>
						<th scope="col-md-10">Categoria</th>
					</tr>
				</thead>
			@foreach($Libros as $li)
				<tbody class="col-md-10">
    				<tr>
						<th scope="row">{{$li->IdLibro}}</th>
						<td>{{$li->Titulo}}</td>
                        <td>{{$li->IdAutor}}</td>
                        <td>{{$li->IdEditorial}}</td>
                        <td>{{$li->Edicion}}</td>
                        <td>{{$li->AnoPublicacion}}</td>
                        <td>{{$li->IdCategoria}}</td>
                        
                        @if($li->deletw_at == "")
						<td>  <a href="#" > Inhabilitar </a>
		  					  <a href="#" > | Modificar </a>
								
						@else
				 			  <a href="#" > Restaurar   </a>
							  <a href="#" > Eliminar	</a>
						@endif
						</td>
					</tr>
			@endforeach
  				</tbody>
	        </table>
        </div>
	</div>
</div>

@stop