<html>

  <script src="jquery.3.3.1.min.js"></script>

<div id="map" style="width:100%;height:650px"></div>
<script>
if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(myMap);
}

function myMap(position) {
var x=position.coords.latitude;
  var y=position.coords.longitude;

setInterval(function(){
  var x=position.coords.latitude;
	var y=position.coords.longitude;
$.post('save1.php',{k1:x,k2:y},function(data){
alert('save');
});
},10000);

	
  var myCenter = new google.maps.LatLng(x,y);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 6};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhV4Kpv_u5vklBc4wnSSvA7bKqbXdk-yg&callback=myMap"></script>

</html>