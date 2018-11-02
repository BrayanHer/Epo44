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
        <form action="{{route('GPrestamo')}}" method="POST" enctype='multipart/form-data'>                        
    		{{csrf_field()}}
				<div class="alert alert-primary col-md-12" role="alert">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdPrestamos">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Nuevo "Prestamo de Libro"
				</div>
				<!-- Modal -->
    		    <div class="modal fade" id="IdPrestamos" tabindex="-1" role="dialog" aria-labelledby="IdPrestamosLabel" aria-hidden="true">
		      <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h5 class="modal-title" id="IdPrestamosLabel"> Prestamo Libro </h5>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              <span aria-hidden="true">&times;</span>
		            </button>
		          </div>

				  <div class="modal-body">
				    @if($errors->first('IdPrestamo')) 
				     <i> {{$errors->first('IdPrestamo')}} </i> 
		    		@endif
		    		<div class="form-group col-xl-2">
							<label for="ejemplo_email_1"> Clave </label>
							<input type="text" class="form-control" id="IdPrestamo" name="IdPrestamo" value="{{$IdPrestamo}}" readonly='readonly'>
						</div>
		        
						@if($errors->first('IdMatricula')) 
						<i> {{$errors->first('IdMatricula')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Matrícula </label>
							<input type="text" class="form-control" id="IdMatricula" name="IdMatricula" value="{{old('IdMatricula')}}" 
														placeholder="Introduce la Matrícula">
						</div>

						@if($errors->first('IdLibro')) 
						<i> {{$errors->first('IdLibro')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Libro </label>
							<input type="text" class="form-control" id="IdLibro" name="IdLibro" value="{{old('IdLibro')}}" 
														placeholder="Introduce el Libro">
						</div>

						@if($errors->first('FechaPrestamo')) 
						<i> {{$errors->first('FechaPrestamo')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Fecha de Prestamo </label>
							<input type="Date" class="form-control" id="FechaPrestamo" name="FechaPrestamo" value="{{old('FechaPrestamo')}}" 
														placeholder="Introduce la Fecha de Prestamo">
						</div>

						@if($errors->first('FechaEntrega')) 
						<i> {{$errors->first('FechaEntrega')}} </i> 
						@endif	
						<div class="form-group col-xl-12">
							<label for="ejemplo_email_1"> Fecha de Entrega </label>
							<input type="Date" class="form-control" id="FechaEntrega" name="FechaEntrega" value="{{old('FechaEntrega')}}" 
														placeholder="Introduce la Fecha de Entrega">
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
						<th scope="col-md-10">Matrícula</th>
                        <th scope="col-md-10">Libro</th>
						<th scope="col-md-10">Fecha de Prestamo</th>
						<th scope="col-md-10">Fecha de Entrega</th>
					</tr>
				</thead>
			@foreach($Prestamo as $pr)
				<tbody class="col-md-10">
    				<tr>
						<th scope="row">{{$pr->IdPrestamo}}</th>
                        <td>{{$pr->IdMatricula}}</td>
                        <td>{{$pr->IdLibro}}</td>
                        <td>{{$pr->FechaPrestamo}}</td>
                        <td>{{$pr->FechaEntrega}}</td>
                        
                        @if($pr->deletw_at == "")
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