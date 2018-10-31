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
	<br><br>
	<h1> Consultas </h1>
Autores
<br>
	<table border="1" bordercolor="blue">
	 <tr> <td> Clave </td> <td> Nombre </td> <td> Apellido Paterno </td> <td> Apellido Materno </td> <td> Acciones </td> </tr>
		@foreach($Autores as $au)

	 <tr> 
	  <td> {{$au->IdAutor}} </td>
	  <td> {{$au->Nombre}} </td>
	  <td> {{$au->APaterno}} </td>
	  <td> {{$au->AMaterno}} </td>

	  		@if($au->deletw_at == "")
	  <td>  <a href="#" >
            Inhabilitar 
        	</a>
            
            <a href="#" >
		   | Modificar
		   	</a>
			
				@else
			<a href="#" >
			Restaurar
			</a>

			<a href="#" >
			Eliminar
			</a>

			@endif
        </td>
	 </tr>
		@endforeach
	</table>

Editoriales
<br>
	<table border="1" bordercolor="blue">
	 <tr> <td> Clave </td> <td> Nombre </td> <td> Apellido Paterno </td> <td> Apellido Materno </td> <td> Acciones </td> </tr>
		@foreach($Autores as $au)

	 <tr> 
	  <td> {{$au->IdAutor}} </td>
	  <td> {{$au->Nombre}} </td>
	  <td> {{$au->APaterno}} </td>
	  <td> {{$au->AMaterno}} </td>

	  		@if($au->deletw_at == "")
	  <td>  <a href="#" >
            Inhabilitar 
        	</a>
            
            <a href="#" >
		   | Modificar
		   	</a>
			
				@else
			<a href="#" >
			Restaurar
			</a>

			<a href="#" >
			Eliminar
			</a>

			@endif
        </td>
	 </tr>
		@endforeach
	</table>





</body>
</html>
@endsection