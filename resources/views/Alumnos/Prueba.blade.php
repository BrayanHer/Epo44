@extend('home')
@section('homecontent')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Datos del Alumnos</a></li>
    <li><a href="#tabs-2"> Información Adicional</a></li>
    <li><a href="#tabs-3">Datos de los Padres</a></li>
  </ul>
  <div id="tabs-1">


  </div>

  <div id="tabs-2">

  </div>

  <div id="tabs-3">

  </div>

</div>
@stop