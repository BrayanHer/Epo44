@extends('home')
@section('homecontent')
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Buscanos</title>

		<link href="" rel="stylesheet"> 
			<!-- CSS ============================================= -->
			<link rel="stylesheet" href="ub/css/linearicons.css">
			<link rel="stylesheet" href="ub/css/font-awesome.min.css">
			<link rel="stylesheet" href="ub/css/magnific-popup.css">
			<link rel="stylesheet" href="ub/css/nice-select.css">							
			<link rel="stylesheet" href="ub/css/animate.min.css">
			<link rel="stylesheet" href="ub/css/jquery-ui.css">			
			<link rel="stylesheet" href="ub/css/owl.carousel.css">
			<link rel="stylesheet" href="ub/css/main.css">
	</head>
	<body>	
		<!-- Start contact-page Area -->
		<section class="contact-page-area section-gap">
			<div class="container">
				<div class="row">
					<!-- aqui esta el puto mapa -->
					<div class="map-wrap" style="width:100%; height: 445px;" >
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3761.615632064334!2d-99.59809278546872!3d19.472131986861893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1541269488428" width="100%" height="445px" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<!-- aqui se termina el mapa -->
					<div class="col-lg-4 d-flex flex-column address-wrap">
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-map-marker"></span>
							</div>
							<div class="contact-details">
								<h5>Venustiano Carranza S/N, Centro, 50850 Temoaya, Méx.</h5>
								<p>
									Dirección
								</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-user"></span>
							</div>
							<div class="contact-details">
								<h5> Nombre Director</h5>
								<p>Director</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-user"></span>
							</div>
							<div class="contact-details">
								<h5>Nombre Sub-Directora</h5>
								<p>Sub-Directora</p>
							</div>
						</div>														
					</div>
					<div class="col-lg-8">
						<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
							<div class="row">					
								<div class="col-lg-6 form-group">		
									<h5 align="center">Mandanos un Mensaje</h5><br>
									<input name="name" placeholder="Introduce tu nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introduce tu nombre'" class="common-input mb-20 form-control" required="" type="text">
									
									<input name="email" placeholder="Introduce tu Correo" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introduce tu correo'" class="common-input mb-20 form-control" required="" type="email">

									<input name="subject" placeholder="Preparatoria_oficial@EPO44.org " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Preparatoria_oficial@EPO44.org '" class="common-input mb-20 form-control" required="" type="text">
								</div>					
								<div class="col-lg-6 form-group">
									<br><br>
									<textarea class="common-textarea form-control" name="message" placeholder="Escribe tu Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe tu Mensaje'" required=""></textarea>				
								</div>
								<div class="col-lg-12">
									<div class="alert-msg" style="text-align: left;"></div>
									<button class="genric-btn primary circle" style="float: right;">Enviar</button>										
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>	
		</section>
			<!-- End contact-page Area -->

			<script src="ub/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="ub/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="ub/js/easing.min.js"></script>			
			<script src="ub/js/hoverIntent.js"></script>
			<script src="ub/js/superfish.min.js"></script>	
			<script src="ub/js/jquery.ajaxchimp.min.js"></script>
			<script src="ub/js/jquery.magnific-popup.min.js"></script>	
 			<script src="ub/js/jquery-ui.js"></script>			
			<script src="ub/js/owl.carousel.min.js"></script>						
			<script src="ub/js/jquery.nice-select.min.js"></script>							
			<script src="ub/js/mail-script.js"></script>	
			<script src="ub/js/main.js"></script>	
	</body>
</html>
@stop