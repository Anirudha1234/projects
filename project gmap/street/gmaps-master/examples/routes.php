<?php
$l=$_REQUEST['l'];
$t=$_REQUEST['t'];


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GMaps.js &mdash; Routes</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD6ISOUp1bImgNFvkF9Qhnq6PmMWmXuGCM&sensor=true"></script>
  <script type="text/javascript" src="../gmaps.js"></script>
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="examples.css" />
<body onLoad="getLocation()">

     <script type="text/javascript">
    var map,x,y,m;
		 
		 
 function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}
		 
		 
		 
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    m= position.coords.latitude; 
    y=position.coords.longitude;
	  var m2=<?php  echo $l; ?>;
		var y2=<?php  echo $t; ?>;

	  
	document.getElementById("msg").innerHTML="Distsnce =" + getDistanceFromLatLonInKm(m,y,m2,y2).toFixed(2)+"km";
	  $(document).ready(function(){
		

		  
		alert(m+" "+y );
		alert(m2+" "+y2 );

		map = new GMaps({
        el: '#map',
        lat: m,
        lng: y
      });
      map.drawRoute({
        origin: [m, y],
        
       // destination: [21.2078, 81.3269],
	destination: [m2, y2],
        travelMode: 'driving',
        strokeColor: '#131540',
        strokeOpacity: 0.6,
        strokeWeight: 6
      });
    });
}
	</script>
</head>
 

<p id="demo"></p>

<script>

</script>
 
 <h1 id="msg"></h1>
 
  <div class="row">
    <div class="span11">
      <div id="map"></div>
    </div>
    <div class="span6">
    
    </div>
  </div>
</body>
</html>
