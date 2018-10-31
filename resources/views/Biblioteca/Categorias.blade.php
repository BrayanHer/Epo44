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
        <form action="{{route('Gcategorias')}}" method="POST" enctype='multipart/form-data'>                        
		  {{csrf_field()}}
				<div class="alert alert-primary col-md-12" role="alert">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#IdCategoria">
						<i class="fa fa-fw fa-plus"></i>
					</button> &nbsp; Agregar nueva "Categoria"
				</div>
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
						<th scope="col-md-10">Categoria</th>
					</tr>
				</thead>
			@foreach($Categorias as $ca)
				<tbody class="col-md-10">
    				<tr>
						<th scope="row">{{$ca->IdCategoria}}</th>
						<td>{{$ca->Categoria}}</td>

					@if($ca->deletw_at == "")
						<td>    <a href="#" > Inhabilitar </a>
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