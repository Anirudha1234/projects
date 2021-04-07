<?php
error_reporting(0);
session_start();
$x=$_REQUEST['l'];
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
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

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





<form>
Rating And Review
<input name="name"  type="hidden" value="<?php  echo $x; ?>">
<select name="xx">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<input type="submit" name="b1">
</form>
<?php
if(isset($_REQUEST["b1"]))
{
 $n=$_REQUEST['name'];
 $r=$_REQUEST['xx'];
mysql_connect('localhost','root','');
mysql_select_db('medicine');
$q="insert into rating values('$n','$r')";
$rs=mysql_query($q);
if($rs)
{
echo "<script>alert('save sucessfully');
window.location='demo2.php';
</script>";
}
}
?>
 