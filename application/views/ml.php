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
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
<!--font-family: 'Metrophobic', serif;-->
<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic,600italic' rel='stylesheet' type='text/css'> 
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body onLoad="load()" onUnload="GUnload()">
<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>
<!--wrapper start-->
<body>
  <br>
  <br>
  <div class="container">
      <div class="jumbotron">
        <h1>Mobile Legends</h1>
        <img src="<?php echo base_url('assets/images/ml.jpg')?>" alt="" width="75%" align="center">      
        <p><br>Mobile Legends adalah sebuah permainan piranti bergerak berjenis MOBA yang dikembangkan dan diterbitkan oleh Moonton.Mobile Legends: Bang Bang adalah sebuah permainan MOBA yang dirancang untuk ponsel. Kedua tim lawan berjuang untuk mencapai dan menghancurkan basis musuh sambil mempertahankan basis mereka sendiri untuk mengendalikan jalan setapak, tiga "jalur" yang dikenal sebagai "top", "middle" dan "bottom", yang menghubungkan basis-basis.
Di masing-masing tim, ada lima pemain yang masing-masing mengendalikan avatar, yang dikenal sebagai "hero", dari perangkat mereka sendiri. Karakter terkontrol komputer yang lebih lemah, yang disebut "minions", bertelur di basis tim dan mengikuti tiga jalur ke basis tim lawan, melawan musuh dan menara.</p>
     <button type="button" class="btn"><a href="<?php echo base_url('Welcome/tugas')?>"><span>Back</span></button> 
      </div>   
  </div>
</body>

    <!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
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
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<link type="text/css" rel="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
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

<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>

</body>
</html>