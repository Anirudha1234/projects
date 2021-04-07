<!DOCTYPE html>
<html>
<head>
	<script src="jquery.3.3.1.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<body style="background-color:#1C1B2D; background-image: url('14.jpg'); height: 150px; background-position: center;background-repeat: no-repeat;background-size: cover;">
	<form method="post">
    <div style="margin-top:40vh; margin-left:30%; ">
      <table style="width: 60%;">
   <tr>
  <td style="font-size: 5vh; color: #B7B3C6;">Bus Name</td> 
  <td colspan="2">
    <div class="form-group row">
      <div class="col-xs-9">
        <input class="form-control input-sm" type="text"  name="name">
      </div>
  </div>
</td>
</tr>
     <tr>
  <td>
    </td>
    <td align="left">
      <input type="submit" class="btn btn-info" value="login">
    </td>
  </tr>
  </table>
  </div>

</form>
<?php
if(isset($_REQUEST["name"])){
	$name=$_REQUEST["name"];
    $con=mysqli_connect('localhost','root','','bus');
    $q="select * from info where name='$name'";
    $rs=mysqli_query($con,$q);
    if($row=mysqli_fetch_array($rs)){
    	session_start();
    	$_SESSION["name"]=$name;
    	header('location:save.php');
    }
    else{
     echo "<p style='color:#E71821; font-size:4vh; margin-left:45%;'>Invalid Busname</p>";
    }
}
?>
</body>
</html>
