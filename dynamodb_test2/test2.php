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

<form method="post" action="check.php" id="myform">
    
<div style="margin-top:3vh; margin-left:30%; ">
<table style="width: 60%;">
<tr><td style="font-size: 4vh; color: #000000;">userid#clientid</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="var1" id="var1" required></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">gameid#roomid </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="var2" id="var2" required></div></div></td></tr>

<tr><td style="font-size: 4vh; color: #000000;">gameid</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="gameid" id="date"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">userid </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="userid" id="userid"></div></div></td></tr>

<tr><td style="font-size: 4vh; color: #000000;">action</td> 
	<td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text"  name="action" id="action"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">jointime</td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="jointime" id="jointime"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">leavetime </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="leavetime" id="leavetime"></div></div></td></tr> 

<tr><td style="font-size: 4vh;color:#000000;">otherusers</td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="otherusers" id="otherusers"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">room </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="room" id="room"></div></div></td></tr>

<tr><td style="font-size: 4vh;color:#000000;">roomid </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="roomid" id="roomid"></div></div></td></tr> 

<tr><td style="font-size: 4vh;color:#000000;">status </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="status" id="status"></div></div></td></tr> 

<tr><td style="font-size: 4vh;color:#000000;">time </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="time" id="time"></div></div></td></tr>                                           

<tr><td style="font-size: 4vh;color:#000000;">userid#status </td><td colspan="2"><div class="form-group row">
      <div class="col-xs-8"><input class="form-control input-sm" type="text" name="var3" id="var3"></div></div></td></tr> 

<tr><td></td><td align="left"><input type="submit" class="btn btn-info" value="insert or update dynamodb table" name="check" id="check"></td></tr>
</table>
</div>
</form>
</body>
</html>