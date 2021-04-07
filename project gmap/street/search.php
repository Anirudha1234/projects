<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="themes/assets/ico/MediSeen.ico">
    <title>MediSeen</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Google Maps Multiple Markers</title>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD6ISOUp1bImgNFvkF9Qhnq6PmMWmXuGCM&sensor=true"></script>

    <link href="themes/assets/css/carousel.css" rel="stylesheet">
    <link href="themes/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: khaki">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="index.php" style="font-family: Brooklyn; font-size: xx-large; color: mediumseagreen">
                HOSPITAL AND COLLEGE
            </a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav" style="padding-right: 15px">
                <!--<li class="active"><a href="index.html">Home</a></li>-->
                <li><a href="sign_up/ShopLogin.php">Are you a Admin?</a></li>
                <!--Login/ profile button-->
                <li><a href="sign_up/userlogin.php">SIGN-UP/LOGIN</a></li>
            </ul>
        </div>
    </div>
</div>

<?php
$k=$_REQUEST['search'];

mysql_connect('localhost','root','');
mysql_select_db('medicine');

//value
//if  'hosptial'
//else  education
$ar=array();	

 $q="select * from  tbl_med where medicinetype like '%$k%'  or  name like '%$k%'";// where medi='$x'";
$rs=mysql_query($q);

while($row=mysql_fetch_array($rs)){
	$m[]=$row['name'];
	}

foreach($m as $n)
{	
 $q="select * from  infotbl where name='$n'";// where medi='$x'";
$rs=mysql_query($q);



		$qq="select AVG(rating) from rating  where name='$n'";
		$rsr=mysql_query($qq);
		$roww=mysql_fetch_row($rsr);
		$rrr=$roww[0];	

while($row=mysql_fetch_array($rs)){
	array_push($ar,array($row['name']."<br><font color='blue'>Rating : $rrr</font>
<br><b><a href='rateit.php?l=$row[name]'>Rate Now</a></b>
<br><b>
<a href='gmaps-master/examples/routes.php?l=$row[longi]&t=$row[lati]'>Get Direction</a></b>",$row['longi'],$row['lati']));
	}
}

$v=$_REQUEST['type'];
if($v=="college")
{

echo	$q="select * from  education ";// where medi='$x'";
$rs=mysql_query($q);

while($row=mysql_fetch_array($rs)){
	$m[]=$row['cname'];
	
}

foreach($m as $n)
{	
 $q="select * from  education where cname='$n'";// where medi='$x'";
$rs=mysql_query($q);


while($row=mysql_fetch_array($rs)){
	array_push($ar,array($row['cname']."<a>aaaa</a>",$row['longitude'],$row['latitude']));
	}
}







}





/*error_reporting(0);
$usrname = 'root';
$password = '';
$hostname = 'localhost:3306';
$medname="";
$medcomp="";
//connection to the database
$conn = mysqli_connect($hostname, $usrname, $password)
or die("Unable to connect to MySQL");
$tbname=$_SESSION['susr'];
$selected = mysqli_select_db($conn, "mediseen")
or die("Could not select mediseen");
$search=$_POST["search"];

if(!empty($_POST))
{
    $sql=
}
*/?>


<div id="map" class="" style="height: 450px"></div>


<script>
    // Define your locations: HTML content for the info window, latitude, longitude
    var locations =<?php   echo json_encode($ar);?> /*[
        ['<h4>Apollo hospital</h4>', 21.216305,81.322491],
        ['<h4>Baba medical</h4>', 21.193403, 81.286889],
        ['<h4>Gupta medical</h4>', 21.189458,81.283008],
        ['<h4>Kiva</h4>', 21.205742,81.327663],
        ['<h4>Mahesh medical</h4>', 21.196568,81.342611],
        ['<h4>Mandoli</h4>',21.193391,81.292372],
        ['<h4>Manohar medical</h4>',21.186054,81.314224],
        ['<h4>Your Location</h4>', 21.1946, 81.2989]
    ]*/

    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';

    var icons = [
        iconURLPrefix + 'red-dot.png',
        iconURLPrefix + 'green-dot.png',
        iconURLPrefix + 'blue-dot.png',
        iconURLPrefix + 'orange-dot.png',
        iconURLPrefix + 'purple-dot.png',
        iconURLPrefix + 'pink-dot.png',
        iconURLPrefix + 'yellow-dot.png'
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
</script>

<script src="themes/jquery-1.10.2.min.js"></script>
<script src="themes/dist/js/bootstrap.min.js"></script>
<script src="themes/assets/js/holder.js"></script>

<script src='themes/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>