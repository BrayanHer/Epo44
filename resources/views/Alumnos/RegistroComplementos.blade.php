@extends('home')
@section('homecontent')
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title> Registro Madre </title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
            <script src="main.js"></script>
        </head>
        <body>


        <a href="{{route('RegistroPadres')}}"> 
				<button type="submit" class="btn btn-success btn-md">
 				    <span  aria-hidden="true"></span> Avanzar 
                </button>
        </a>
        </body>
    </html>





@endsection