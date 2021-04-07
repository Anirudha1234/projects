<?php
$x=$_REQUEST["k1"];
$y=$_REQUEST["k2"];
session_start();
$name=$_SESSION["name"];
$con=mysqli_connect('localhost','root','','bus');
$q="insert into bustrack values('$name','$x','$y')";
$rs=mysqli_query($con,$q);
if($rs){

	echo"saved";
}
else{
	echo"error";
}
?>