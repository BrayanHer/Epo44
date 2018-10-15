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
#Wear{
  position:absolute;
  right:5%;
}
.card-text{
  color:black;
}
#tl1{
  position:Center;
}


</style>
<body>

<div class="card border-info  mb-3" style="max-width: 50rem;">
 
  <div class="card-body text-danger">
    <h5 id="tl1" class="card-title">Misión</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div id="Wear"class="card border-success mb-3" style="max-width: 90rem;">
  <div class="card-body text-danger">
    <h5 class="card-title">Visión</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<br><br><br><br><br><br><br><br>

<div class="card border-dark mb-3" style="max-width: 50rem;">
  <div class="card-body text-danger">
    <h5 class="card-title">Objetivos</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</body>
</html>
@endsection