<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="themes/assets/ico/MediSeen.ico">
    <title>Hospital and College</title>

    <!-- Bootstrap core CSS -->
    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>'

    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="themes/assets/css/carousel.css" rel="stylesheet">
</head>

<!-- NAVBAR
================================================== -->
<body>

<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: khaki">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" style="font-family: Brooklyn; font-size: xx-large; color: mediumseagreen">
                        MediSeen
                    </a>
                </div>
                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav" style="padding-right: 15px">
                        <!--<li class="active"><a href="index.html">Home</a></li>-->
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <!--Login/ profile button-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span> 
                                <strong>
                                    <?php
                                    session_start();
                                    echo $_SESSION['uid'];
                                    ?>
                                </strong>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <span class="glyphicon glyphicon-user icon-size"></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left"><strong>
                                                        <?php
                                                        echo $_SESSION['usn'];
                                                        ?>
                                                    </strong></p>
                                                <p class="text-left small">
                                                    <?php
                                                    echo $_SESSION['mail'];
                                                    ?>
                                                </p>
                                                <p class="text-left">
                                                    <a href="#" class="btn btn-primary btn-block btn-sm">View Profile</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <a href="logout.php" name="logout" class="btn btn-danger btn-block">LOGOUT</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>





                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Carousel
================================================== -->
<div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <script
                        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=true">
                </script>

                <script>
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
                    var myCenter=new google.maps.LatLng(21.1914,81.2998);
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
                            content:"Bhilai Institute of Technology, Durg"
                        });

                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map,marker);
                        });
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
                <div id="googleMap" style="height:450px;"></div>
                <div class="container">
                    <div class="carousel-caption">
                        <!--<a class="btn btn-lg btn-default" href="#" role="button" style="font-size:2em">Search Your Medicine &raquo;</a>-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-3">
                                    <form action="" class="search-form">
                                        <div class="form-group has-feedback">
                                            <label for="search" class="sr-only">Search</label>
                                            <input type="text" class="form-control" name="search" id="search" placeholder="search">
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
        <h1>College & Hospital Locator</h1>
        <p>
            Check if the medicine is available at store near you.
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
                <h3>Welcome to the Medicine locator</h3>
                <p>
                    It helps you to check whether any medicine that you need is available in a medical store near you.
                </p>
            </div>


        </div>
    </div>
</div>


<!--  <div class="container marketing">
  <div id="myCarousel4" class="carousel slide" data-ride="carousel">
     &lt;!&ndash; Indicators &ndash;&gt;
     <div class="carousel-inner">
     <div class="item active">
     <div class="row featurette">
       <div class="col-md-7">
         <h2 class="featurette-heading">Fish and Chips <span class="text-muted">It's very very testy</span></h2>
         <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
       </div>
       <div class="col-md-5">
         <img src="themes/assets/images/fish-and-chips.png" alt="Fish and Chips">
       </div>
     </div>
     </div>-->

<!--
 <div class="item">
   <div class="row featurette">
     <div class="col-md-5">
       <img src="themes/assets/images/burger.png" alt="Generic placeholder image">
     </div>
     <div class="col-md-7">
       <h2 class="featurette-heading">Oh yeah, very nice Burger. <span class="text-muted">Delicious.</span></h2>
       <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
     </div>
   </div>
   </div>-->


<!--<div class="item">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Try yourself <span class="text-muted">Testy</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="img-circle" src="themes/assets/images/drinks.png" alt="Generic placeholder image">
    </div>
  </div>
  </div>
   </div>
</div>&lt;!&ndash; /.carousel &ndash;&gt;
</div>&lt;!&ndash; /.container &ndash;&gt;
  &lt;!&ndash; /END THE FEATURETTES &ndash;&gt;-->


<!-- FOOTER -->
<!--<footer>
  <div class="container">
  <p class="pull-right"><a href="#">Back to top</a></p>
  <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </div>
</footer>-->



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
