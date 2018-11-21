@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}

</style>
<div class="container">
<div class="row">

<div class="alert alert-primary col-md-10" role="alert">

<button type="submit" class="btn btn-success"><i class="fa fa-fw fa-plus"></i>
</button> &nbsp; Agregar nuevo "Autor"
</div>

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
  <tbody class="col-md-10">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        
        </div>

</div>
</div>

@stop