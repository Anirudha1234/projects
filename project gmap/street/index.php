<?php
error_reporting(0);
$long=$_REQUEST['long'];//r
$lat=$_REQUEST['lat'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/MediSeen.ico">
    <title>STREET VIEWER</title>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD6ISOUp1bImgNFvkF9Qhnq6PmMWmXuGCM&sensor=true">
			</script>
			<script>
			  function initGeolocation()
     {
        if( navigator.geolocation )
      {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
        }
     }

     function success(position)
     {

         document.getElementById('long').value = position.coords.longitude;
         document.getElementById('lat').value = position.coords.latitude
     }

     function fail()
     {
        // Could not obtain location
     }

			
			
                window.onload = function() {
                    var startPos;
                    var geoOptions = {
                        enableHighAccuracy: true
                    };

                    var geoSuccess = function(position) {
                        startPos = position;
                        var startLat = startPos.coords.latitude;
                        var startLong = startPos.coords.longitude;
                    };
                    var geoError = function(error) {
                        console.log('Error occurred. Error code: ' + error.code);
                        // error.code can be:
                        //   0: unknown error
                        //   1: permission denied
                        //   2: position unavailable (error response from location provider)
                        //   3: timed out
                    };

                    navigator.geolocation.getCurrentPosition(geoSuccess, geoError, geoOptions);
                };
			var myCenter=new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);
			
			//var myCenter=new google.maps.LatLng(position.coords.longitude,position.coords.latitude);
			var marker;
			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({
			  position:myCenter,
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);

			// Info open
			var infowindow = new google.maps.InfoWindow({
			  content:"Your Location"
			  });

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
    <!-- Bootstrap core CSS -->
    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
  </head>

<!-- NAVBAR
================================================== -->
  <body onLoad="initGeolocation();">

<html>
<head>

<link href="style1.css"  rel="stylesheet">
</head>
<body>
<div id="header">
<span style="float:left;margin-left:90px;margin-top:20px; padding:5px; line-height:40px;color:indigo;">

	<h1>WELCOME TO LOCATION FINDER SYSTEM</h1>
</div>




    <div class="navbar-wrapper">
<!--
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: khaki">
          <div class="container">

            <div class="navbar-header">
            <h1><?php echo "longitude" .$long ." <br> latitute ".$lat; ?></h1>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" style="font-family: Brooklyn; font-size: xx-large; color: mediumseagreen">
                 STREET VIEWER
              </a>
            </div>


            <div class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav" style="padding-right: 15px">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="sign_up/ShopLogin.php">Are you a ?</a></li>
                  Login/ profile button
                 <li><a href="sign_up/userlogin.php">SIGN-UP/LOGIN</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


-->
    <!-- Carousel
    ================================================== -->

    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>-->
      <div class="carousel-inner">
        <div class="item active">
          
			<div id="googleMap" style="height:450px;"></div>
			  <div class="container">
				<div class="carousel-caption">
				  <!--<a class="btn btn-lg btn-default" href="#" role="button" style="font-size:2em">Search Your Medicine &raquo;</a>-->
                  
 <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-3">
                                <form action="search.php" class="search-form">
<!-- 
<select name="type">
<option value="hospital">hospital</option>
<option value="college">college</option>
</select>-->
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" name="search" id="search" placeholder="SEARCH">
                                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
			  </div>
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>


	<div class="mainTitle">
	<div class="container">
	<h1>Street View Locator</h1>
	<p>
        Check if the Street is near you.
	</p>
	</div>
	</div>


	
	<div class="introSection">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="cntr">  </h1>
			</div>
		</div>
		</div>
	</div>



	
	<div class="introSection">
		<div class="container">
		<div class="row">
		<div class="col-lg-6">
            <h3>Welcome to the Street View Locator</h3>
		<p>

            It helps you to check whether any Street that you search is near you.
		</p>
		</div>

		
		</div>
		</div>
	</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="themes/dist/js/bootstrap.min.js"></script>
    <script src="themes/assets/js/holder.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

  </body>
</html>
