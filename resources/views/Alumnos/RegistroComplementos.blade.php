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
        
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" />
 </head>
 <body>

<div class="container" id="container">
		<h1>Dropzone.js</h1>
		<h2 class="lead">Configuration Demo</h2>

		<div id="actions" class="row">
			<div class="col-lg-7">
				<!-- The fileinput-button span is used to style the file input field as button -->
			<span class="btn btn-success fileinput-button">
				<i class="glyphicon glyphicon-plus"></i>
				<span>Add files...</span>
			</span>
				<button type="submit" class="btn btn-primary start">
					<i class="glyphicon glyphicon-upload"></i>
					<span>Start upload</span>
				</button>
				<button type="reset" class="btn btn-warning cancel">
					<i class="glyphicon glyphicon-ban-circle"></i>
					<span>Cancel upload</span>
				</button>
			</div>

			<div class="col-lg-5">
				<!-- The global file processing state -->
			<span class="fileupload-process">
			  <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
				  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
			  </div>
			</span>
			</div>
		</div>
    </html>





@endsection
