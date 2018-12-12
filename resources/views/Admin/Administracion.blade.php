@extends('administrador')
@section('admincontent')

<style>
* {
	margin:2px;
	padding:1px;
}
a{
  color:white;
}
hr{
  background:white;
}
</style>
<div class="container">
<div class="row">

<div class="card text-white bg-dark mb-3" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-users"></i>&nbsp;Maestros</h5>
    <hr color="black" size=1>
    <a href="{{route('Maestros')}}" class="card-link"><i class="fa fa-plus"></i>&nbsp;Nuevo Registro</a>
    <a href="{{route('C_Maestros')}}" class="card-link">Registros</a>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-graduation-cap"></i>&nbsp;Alumnos</h5>
    <hr color="black" size=1>
    <a href="{{route('Alumnos')}}" class="card-link"><i class="fa fa-plus"></i>&nbsp;Nuevo Registro</a>
    <a href="#" class="card-link">Registros</a>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 28rem;">
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-book"></i>&nbsp;Biblioteca</h5>
    <hr color="black" size=1>
    <a href="#" class="card-link"><i class="fa fa-plus"></i>&nbsp;Nuevo Registro</a>
    <a href="#" class="card-link">Registros</a>
  </div>
</div>

<div class="card text-white bg-dark mb-3" style="width: 32rem;">
  <div class="card-body">
    <h5 class="card-title"><i class="fa fa-sliders"></i>&nbsp;Administración</h5>
    <hr color="black" size=1>
    <a href="#" class="card-link">Administradores</a>
    <a href="#" class="card-link">Directivos</a>
    <a href="#" class="card-link"></a>
  </div>
</div>

</div>
</div>
@stop