
<html>
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blue One Page HTML Template</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="In/css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="In/css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="In/css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="In/css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="In/css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="In/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="In/css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="In/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Bienvenido</h2>
                               
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Quieres conocer mas sobre nosostros </h2>
                                <span>Envianos un correo con tus dudas</span>
                                <a href="{{route('Ubicacion')}}" class="btn btn-blue btn-effect">Contactos</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Conoce nuestras carreras</h2>
                                <
                               
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			
			
			
			
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="In/js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="In/js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="In/js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="In/js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="In/js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="In/js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="In/js/jquery.slitslider.js"></script>
        <script src="In/js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="In/js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="In/js/main.js"></script>
        <div>
        @yield('slider')
        </div>
    </body>
</html>
