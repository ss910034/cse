<!DOCTYPE HTML>
<html>
	<head>
		<title>Monochromed by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<style>
	      #map {
	        height: 80%;
	      }
	    </style>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">－Hospital－</a></h1>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html">Homepage</a></li>
							<li><a href="threecolumn.html">Two Sidebars</a></li>
							<li><a href="twocolumn1.html">Left Sidebar</a></li>
							<li><a href="twocolumn2.html">Right Sidebar</a></li>
							<li class="active"><a href="onecolumn.html">No Sidebar</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main" style="padding-top: 20px !important; text-align: center; background: white !important;">
			<div class="container">
				<div class="row">

					<!-- Content -->
						<div id="content" class="12u skel-cell-important">
							<section> 
								<header>
									<h2 style="font-family: 微軟正黑體; font-size: 25px; font-weight: bold;">尋找醫院</h2>
								</header>
							</section>
								<div id="map" style="width:400px; height: 500px;"></div>
						</div>

    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj1JsxTM4Da2Mh0FeMPPJ55EEqA95sKdM&callback=initMap">
    </script>
					<!-- /Content -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->



	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				
			</div>
		</div>

	</body>
</html>