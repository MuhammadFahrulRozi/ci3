<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Metas Page details-->
<title>Tugas Framework Tugas02</title>
<meta name="description" content="OnePage Resume Portfolio">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/main.css')?>">
<!--google font style-->
<link href="<?php echo base_url('http://fonts.googleapis.com/css?family=Montserrat:400,700')?>"
rel='stylesheet' type='text/css'> 
<!--font-family: 'Metrophobic', serif;-->
<link href="<?php echo base_url('http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic')?>" rel='stylesheet' type='text/css'> 
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font icon css style-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
</head>
<body onLoad="load()" onUnload="GUnload()">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--wrapper start-->
<div class="wrapper noGap" id="wrapper">

<!--Header start -->

<header>
  	<!--menu start-->
    <div class="menu">
    <a href="#" class="nav-icon" id="nav-show"><i class="fa fa-bars"></i></a>
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
              	<!--<div class="logo">logo</div> -->
                <div class="navArea"><a href="#" class="closeMenu"><i class="fa fa-times"></i></a>
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                     <!-- <a class="navbar-brand" href="#">Menu</a>  --></div>
                    <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class="menuItem active"><a href="#wrapper">Home</a></li>
                        <li class="menuItem"><a href="#aboutus">About Me</a></li>
                        <li class="menuItem"><a href="#skillset">Blog</a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end--> 
    <!--banner start-->
    <div class="banner row" id="banner">
    <div class="bannerText">
        <h1><?php echo $nama;?></h1>
        <h3>Travelling and Hicking,pendakian itu proses puncak itu BONUS</h3>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
        <!--background slide show start-->
        <div class="slide"> 
          <img src="<?php echo base_url('assets/images/header-image/image05.jpg')?>" alt="image01"> </div>
        <div class="slide"> 
          <img src="<?php echo base_url('assets/images/header-image/image02.jpg')?>" alt="image01"> </div>
        <div class="slide"> 
          <img src="<?php echo base_url('assets/images/header-image/image03.jpg')?>" alt="image01"> </div>
        <div class="slide"> 
          <img src="<?php echo base_url('assets/images/header-image/image04.jpg')?>" alt="image01"> </div>
        <div class="slide"> 
          <img src="<?php echo base_url('assets/images/header-image/image01.jpg')?>" alt="image01"> </div>
        <!--background slide show end--> 
      </div>
    </div>
    <!--banner end--> 
    
  </header>
  <!--Header end -->
  
 <!--about us start-->
  <section class="aboutus" id="aboutus">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
      	<div class="heading">
        <h2>About me</h2>
        <h3>A small introduction about my self</h3>        
      </div>
      </div> 
       </div> 
      <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right media"><img src="<?php echo base_url('assets/images/jhon-img.jpg')?>" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left media">
        	<h5>Muhammad Fahrul Rozi</h5>
            <h4>Travelling &amp; Hicking,pendakian itu proses puncak itu BONUS</h4>
            <p>Web ini saya buat untuk bersenang-senang dan mendokumentasikan saya saat naik gunung bersama kawan-kawan saya. Lalu web ini menggunakan sublime untuk membuatnya. Sedikit cerita saya pernah tiga kali naik gunung dan alhamdulilah sampai puncak semua. Pertama kali saya naik gunung Buthak, lalu yang kedua gunung Kelud, dan yang terakhir gunung Panderman</p>
<p>dan rencana selanjutnya saya mau naik gunung semeru april ini, doakan saja saya bisa sampai puncak dan pulang selamat. Kalau kalian ingin join langsung aja bisa hubungi saya di contact ini 085604806850. Thanks :) </p>  	
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
      </div>     
    </div>    
  </section>
  <!--about us end--> 
  <!--Skillset start -->
  <section id="skillset" class="skillset">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
               <div class="heading">
                <h2>Blog</h2>
                <h3>This My Life</h3>        
              </div>
            </div>
            <div class="col-md-12">
            	<div class="col-md-6 col-sm-12 media">
                	<p><?php echo $artikel;?></p>
                </div>
            	<div class="col-md-6 col-sm-12">                
                <div class="skillbar clearfix " data-percent="94%">
                    <div class="skillbar-title"><button type="button" class="btn btn-info"><a href="<?php echo base_url('Blog/fahrul')?>"><span>Mobile Legends</span></div></button>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="86%">
                    <div class="skillbar-title"><button type="button" class="btn btn-info"><a href="<?php echo base_url('Blog/fahrul1')?>"hiking.php">Hiking</div></button>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <div class="skillbar clearfix " data-percent="41%">
                    <div class="skillbar-title"><button type="button" class="btn btn-info"><a href="<?php echo base_url('Blog/fahrul2')?>"anime.php"><span>Film Anime<span></div></button>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>
                </div> <!-- End Skill Bar -->
                
                <!--<div class="skillbar clearfix " data-percent="52%">
                    <div class="skillbar-title"><button type="button" class="btn btn-info"><span>WEB Favorit</span></div></button>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent"></div>-->
                </div> <!-- End Skill Bar -->                
                </div>
            </div>
        </div>
    </div>
  </section>     
  </div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="<?php echo base_url('assets/js/modernizr.custom.26633.js')?>"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.placeholder.js')?>"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="<?php echo base_url('assets/js/stickUp.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.superslides.js')?>" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'skillset',
		  3: 'experience',
		  4: 'education',
		  5: 'ourwork',
		  6: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
	

});
</script>
<script>
	$('#banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
</script>  

<!--for portfolio jquery--> 
<script src="<?php echo base_url('assets/js/jquery.isotope.js')?>" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="<?php echo base_url('assets/css/jquery-ui-1.8.16.custom.css')?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/lightbox.min.css')?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.widget.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.rlightbox.js')?>"></script> 

<!--contact form js--> 
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.contact.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('https://maps.googleapis.com/maps/api/js')?>"></script>
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
					scrollwheel: false,
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
				
				

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Hello!'
                });
            }
        </script>

<script src="<?php echo base_url('assets/js/jquery.easing.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.mousewheel.js')?>"></script> 
<script src="<?php echo base_url('assets/js/slideroption.js')?>"></script> 

<!--for theme custom jquery--> 
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>

</body>
</html>