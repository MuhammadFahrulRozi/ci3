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
        <h1>Anime</h1>
       <img src="<?php echo base_url('assets/images/a.jpeg')?>" alt="" width="50%" align="center">     
       <p><br>Anime adalah animasi dari Jepang yang digambar dengan tangan maupun menggunakan teknologi komputer. Kata anime merupakan singkatan dari "animation" dalam bahasa Inggris, yang merujuk pada semua jenis animasi.Di luar Jepang, istilah ini digunakan secara spesifik untuk menyebutkan segala animasi yang diproduksi di Jepang.Meskipun demikian, tidak menutup kemungkinan bahwa anime dapat diproduksi di luar Jepang.Beberapa ahli berpendapat bahwa anime merupakan bentuk baru dari orientalisme.

Anime pertama yang mencapai kepopuleran yang luas Astro Boy karya Ozamu Tezuka pada tahun 1963. Sekarang anime sudah sangat berkembang jika dibandingkan dengan anime zaman dulu. Dengan grafik yang sudah berkembang sampai alur cerita yang lebih menarik dan seru.[butuh rujukan] Masyarakat Jepang sangat antusias menonton anime dan membaca manga. Dari anak-anak sampai orang dewasa. Mereka menganggap, anime itu sebagai bagian dari kehidupan mereka. Hal ini yang membuat beberapa televisi kabel yang terkenal akan beberapa film kartunnya, seperti Cartoon Network dan Nickelodeon mengekspor kartunnya. Sekarang anime menjadi sebuah bisnis yang menggiurkan bagi semua orang, dan banyak juga orang yang memanfaatkan hal ini untuk sebuah tindakan kejahatan. Pembuat anime itu sendiri disebut animator. Para animator bekerja disebuah perusahaan media untuk memproduksi sebuah anime. Di dalam perusahaan itu, terdapat beberapa animator yang saling bekerja sama untuk menghasilkan sebuah anime yang berkualitas. Tapi sangat disayangkan, gaji dari para animator tersebut kecil jika dibandingkan dengan kerja keras mereka. Hal ini yang membuat para animator enggan untuk bekerja secara professional. Mereka merasa hal itu tidak sebanding dengan usaha yang telah mereka lakukan. Para animator itu sendiri sering disebut "seniman bayangan". Karena mereka bekerja seperti seorang seniman yang berusaha mengedepankan unsur cerita dan unsur intrinsiknya. </p>
      <button type="button" class="btn"><a href="<?php echo base_url('Welcome/tugas')?>"><span>Back</span></button></div>   
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