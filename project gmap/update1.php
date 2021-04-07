<?php
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
  alert('Hello! I am an alert box!');
}
</script>";
}
else{
	echo"error";
}
?>