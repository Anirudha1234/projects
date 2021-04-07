<!DOCTYPE html>
<html>
<head>
	<script src="jquery.3.3.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body style="background-color:#1C1B2D; background-image: url('16.jpg'); height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
<form method="post">
<div style="margin-top:25vh; margin-left:35%; ">
<table style="width: 60%;">
<tr>
	<td style="font-size: 4vh; color: #B7B3C6;">Bus Name</td> 
	<td colspan="2">
		<div class="form-group row">
      <div class="col-xs-9">
      	<input class="form-control input-sm" type="text"  name="name">
      </div>
  </div>
</td>
</tr>
<tr>
	<td style="font-size: 4vh;color:#B7B3C6;">
	Helpline-no.
</td>
<td colspan="2">
	<div class="form-group row">
      <div class="col-xs-9">
      	<input class="form-control input-sm" type="text" name="num">
      </div>
  </div>
</td>
</tr>
<tr>
	<td style="font-size: 4vh;color:#B7B3C6;">Source</td>
<td colspan="2">
	<div class="form-group row">
      <div class="col-xs-9">
      	<input class="form-control input-sm" type="text" name="source">
      </div>
  </div>
</td>
</tr>
<tr>
	<td style="font-size: 4vh;color:#B7B3C6;">
	Destination
</td>
<td colspan="2">
	<div class="form-group row">
      <div class="col-xs-9">
      	<input class="form-control input-sm" type="text" name="destination">
      </div>
  </div>
</td>
</tr>
<tr>
	<td style="font-size: 4vh;color:#B7B3C6;">
	Route
</td>
<td>
<div class="form-group">
  <textarea class="form-control" rows="5" name="route"></textarea>
</div></td>
</tr>
<tr>
	<td>
		</td>
		<td align="left">
			<input type="submit" class="btn btn-info" value="update" onclick="myFunction()">
		</td>
	</tr>
</table>
</div>

<?php
if(isset($_REQUEST["name"])){
$name=$_REQUEST['name'];
$num=$_REQUEST['num'];
$source=$_REQUEST['source'];
$destination=$_REQUEST['destination'];
$route=$_REQUEST['route'];
$con=mysqli_connect('localhost','root','','bus');
$q="update info set helpline='$num',source='$source',destination='$destination',route='$route' where name='$name'";
$rs=mysqli_query($con,$q);
if($rs){
	echo"
<script>
function myFunction() {
  alert('updated successfully');
}
</script>";
}
else{
	echo"
<script>
function myFunction() {
  alert('updated successfully');
}
</script>";
}
}
?>

</body>
</form>
</html>