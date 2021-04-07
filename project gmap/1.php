<!DOCTYPE html>
<html>
<head>
	<script src="jquery.3.3.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body style="background-color:#1C1B2D; background-image: url('n.jpg');">
<form method="post">

<div style="margin-top:35vh; margin-left:40%; ">
<table style="width: 60%;">
<tr><td style="font-size: 4vh; color: #000000;">username</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="u"></div></div></td></tr>
<tr><td style="font-size: 4vh;color:#000000;">password </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="password" name="p"></div></div></td></tr>
<tr><td></td><td align="left"><input type="submit" class="btn btn-info" value="OK"></td></tr>
</table>
</div>
</form>

<?php
if(isset($_REQUEST["u"])){
$u=$_REQUEST["u"];
$p=$_REQUEST["p"];
$con=mysqli_connect('localhost:3325','root','','bus');
$q="select * from login where uname='$u' and password='$p'";
$rs=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rs)){
	session_start();
	$_SESSION["u"]=$u;
	echo"<script>
window.location='home.php';
	</script>";
	
}
else{
	echo"<p style='color:#E71821; font-size:4vh; margin-left:45%;'>Invalid username or password.</p>";
}
}
?>
</body>
</html>