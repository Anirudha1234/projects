<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>
<body>
<form method="post">
<div style="margin-top:20vh; margin-left:30%; ">
<table style="width: 60%;">
<tr><td style="font-size: 4vh; color: #000000;">cl_id</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="cl_id"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">game_id </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="game_id"></div></div></td></tr>

<tr><td style="font-size: 4vh; color: #000000;">date</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="date"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">play_count </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="play_count"></div></div></td></tr>

<tr><td style="font-size: 4vh; color: #000000;">sess_count</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="sess_count"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">ply_chip </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="ply_chip"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">win_chip </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="win_chip"></div></div></td></tr>              

<tr><td></td><td align="left"><input type="submit" class="btn btn-info" value="OK" name="button"></td></tr>
</table>
</div>
</form>

<?php
if(isset($_REQUEST["cl_id"])){
$cl_id=$_REQUEST["cl_id"];
$game_id=$_REQUEST["game_id"];
$date=$_REQUEST["date"];
$play_count=$_REQUEST["play_count"];
$sess_count=$_REQUEST["sess_count"];
$ply_chip=$_REQUEST["ply_chip"];
$win_chip=$_REQUEST["win_chip"];
$con=mysqli_connect('localhost:3325','root','','api_db');
$q="insert into game values('$cl_id','$game_id','$date','$play_count','$sess_count','$ply_chip','$win_chip')";
$rs=mysqli_query($con,$q);
if(isset($rs)){
	echo"inserted";
}
else{
	echo "error";
}}
?>

</body>
</html>