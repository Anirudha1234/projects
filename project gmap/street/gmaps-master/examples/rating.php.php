<?php
session_start();
$n=$_SESSION['name'];
$r=$_REQUEST['rating']
mysql_connect('localhost','root','');
mysql_select_db('medicine');
$q="insert into rating values('$n','$r')";
$rs=mysql_query($q);


?>