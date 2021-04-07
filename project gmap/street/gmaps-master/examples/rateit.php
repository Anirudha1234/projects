<?php
session_start();
$_SESSION['name']=$_REQUEST['l'];
?>
<form>
Rating
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
$n=$_SESSION['name'];
$r=$_REQUEST['rating']
mysql_connect('localhost','root','');
mysql_select_db('medicine');
$q="insert into rating values('$n','$r')";
$rs=mysql_query($q);
}
?>
 