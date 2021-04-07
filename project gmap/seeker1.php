<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seeker1</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Google Maps Multiple Markers</title>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhV4Kpv_u5vklBc4wnSSvA7bKqbXdk-yg&callback=myMap"></script>

    <link href="themes/assets/css/carousel.css" rel="stylesheet">
    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
 session_start();
 $name=$_SESSION["name"];
 $lat="";
 $lon="";
 $con=mysqli_connect('localhost','root','','bus');
 $q="select * from bustrack where name='$name'";
 $rs=mysqli_query($con,$q);
  while($row=mysqli_fetch_array($rs)){
    $lat=$row['latitude'];
    $lan=$row['longitude'];
  }
 ?>

<div id="map" class="" style="height:650px"></div>

<script>
if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(myMap);
}

function myMap(position) {
var x=position.coords.latitude;
  var y=position.coords.longitude;


    var lat="<?php echo $lat ?>";
    var lan="<?php echo $lan?>";
    // Define your locations: HTML content for the info window, latitude, longitude
    var locations =[
        ['<h4>my location</h4>', x,y],
        ['<h4>bus<br><a href="getlocation.php?l='+lat+' & t='+lan+'">Getlocation</a></h4>', lat,lan]
    ]

    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';

    var icons = [
        iconURLPrefix + 'red-dot.png',
        iconURLPrefix + 'green-dot.png',
        
    ]
    var iconsLength = icons.length;

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: new google.maps.LatLng(21.1946, 81.2989),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        streetViewControl: true,
        panControl: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
        }
    });

    var infowindow = new google.maps.InfoWindow({
        maxWidth: 160
    });

    var markers = new Array();

    var iconCounter = 0;

    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: icons[iconCounter],
            animation:google.maps.Animation.BOUNCE
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));

        iconCounter++;
        // We only have a limited number of possible icon colors, so we may have to restart the counter
        if(iconCounter >= iconsLength) {
            iconCounter = 0;
        }
    }

    function autoCenter() {
        //  Create a new viewpoint bound
        var bounds = new google.maps.LatLngBounds();
        //  Go through each...
        for (var i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].position);
        }
        //  Fit these bounds to the map
        map.fitBounds(bounds);
    }
    autoCenter();
}
</script>

<script src="themes/jquery-1.10.2.min.js"></script>
<script src="themes/dist/js/bootstrap.min.js"></script>
<script src="themes/assets/js/holder.js"></script>

<script src='themes/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>