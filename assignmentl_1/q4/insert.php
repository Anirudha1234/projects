<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<form method="post" action="insert.php" id="myform">
    
<div style="margin-top:20vh; margin-left:30%; ">
<table style="width: 60%;">
<tr><td style="font-size: 4vh; color: #000000;">cl_id</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="cl_id" id="cl_id"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">game_id </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="game_id" id="game_id"></div></div></td></tr>

<tr><td style="font-size: 4vh; color: #000000;">date</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="date" id="date"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">play_count </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="play_count" id="play_count"></div></div></td></tr>

<tr><td style="font-size: 4vh; color: #000000;">sess_count</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="sess_count" id="sess_count"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">ply_chip </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="ply_chip" id="ply_chip"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">win_chip </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="win_chip" id="win_chip"></div></div></td></tr>              

<tr><td></td><td align="left"><input type="button" class="btn btn-info" value="insert" name="insert" id="insert"></td></tr>
</table>
</div>

</form>

<?php
include('plugin/dbconfig.php');

 if(isset($_POST['insert'])){
 $cl_id = $_POST['cl_id'];
 $game_id = $_POST['game_id'];
 $date = $_POST['date'];
 $play_count = $_POST['play_count'];
 $sess_count = $_POST['sess_count'];
 $ply_chip = $_POST['ply_chip'];
 $win_chip = $_POST['win_chip'];
 
$data=[
'cl_id'=>$cl_id,
'game_id'=>$game_id,
'date'=>$date,
'play_count'=>$play_count,
'sess_count'=>$sess_count,
'ply_chip'=>$ply_chip,
'win_chip'=>$win_chip
];

$ref="game/";
$postdata=$database->getReference($ref)->push($data);
 }

?>
</body>
</html>