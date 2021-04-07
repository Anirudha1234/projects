

<!DOCTYPE html>
<html>
  <head>
   <script type="text/javascript">
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

   </script>    
 </head>
<html>
<head>
<link href="style1.css"  rel="stylesheet">
</head>
<body>
<div id="header">
<span style="float:left;margin-left:90px;margin-top:20px; padding:5px; line-height:40px;color:indigo;">
	<h1>WELCOME TO  STREET VIEWER</h1>
</div>
<div id="menu">

</div>
<div id="contentarea">
<span style="float:left;margin-top:50px;margin-left:350px; font-size:30px; padding:20px; line-height:80px;color:maroon;">

 <body onLoad="initGeolocation();">
   <FORM NAME="rd" METHOD="POST" ACTION="index.php">
     <INPUT TYPE="text" NAME="long" ID="long" name="long" VALUE="">
     <INPUT TYPE="text" NAME="lat" ID="lat" name="lat" VALUE="">
<input type="submit">
 </body>
</html>

<div id="content">
	
</div>
</div>
<div id="footer">
	<span style ="float:left;color:maroon;"><h1><b>Submitted by :</b></h1>
<div id="footertext">
	<b>KISHOR KUMAR SAHU</b><br><b>SEEMA PATEL</b><br>
</div>
<div>
	<span style="float:right;color:maroon;margin-left:900px;margin-top:-100px"><h1><b>Guided by :Prof. MANOJ SINGH</b></h1></span>
</div>
</div>




















