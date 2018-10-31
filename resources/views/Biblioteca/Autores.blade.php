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
		<form action="{{route('GAutor')}}" method="POST" enctype='multipart/form-data'>                        
		  {{csrf_field()}}
				<div class="alert alert-primary col-md-12" role="alert">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AAutores">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nuevo "Autor"
				</div>
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
							<th scope="col-md-10">Nombre</th>
							<th scope="col-md-10">Apellido Paterno</th>
							<th scope="col-md-10">Apellido Materno</th>
						</tr>
					</thead>
				@foreach($Autores as $au)
				<tbody class="col-md-10">
    				<tr>
							<th scope="row">{{$au->IdAutor}}</th>
							<td>{{$au->Nombre}}</td>
							<td>{{$au->APaterno}}</td>
							<td>{{$au->AMaterno}}</td>

							@if($au->deletw_at == "")
							<td>  <a href="#" > Inhabilitar </a>
										<a href="#" > | Modificar </a>
								
								@else
										<a href="#" > Restaurar   </a>
										<a href="#" > Eliminar		</a>
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