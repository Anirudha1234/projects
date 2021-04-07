<?php

session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="mediseen"; // Database name
$tbl_name="user_detail"; // Table name

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn, "$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['mail'];
$_SESSION['uname'] = $myusername;
$mypassword=$_POST['pass'];
$id="";
$name="";
$sql="SELECT * FROM $tbl_name WHERE user_email='$myusername' and user_pwd='$mypassword'";
$sql1="SELECT user_id from $tbl_name where user_email='$myusername' and user_pwd='$mypassword'";
$sql2="SELECT user_name from $tbl_name where user_email='$myusername' and user_pwd='$mypassword'";

$exec1=mysqli_query($conn, $sql1);
$exec2=mysqli_query($conn, $sql2);

$res=mysqli_query($conn, $sql);
while ($row = $res->fetch_assoc()) {
    $id = $row['user_id'];
    $name = $row['user_name'];
}
//print_r($_SESSION);
// Mysql_num_row is counting table row
/*$count=mysqli_num_rows($res);*/

// If result matched $myusername and $mypassword, table row must be 1 row
if($res){

// Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['naam']= $name;
    $_SESSION['id1']= $id;
    header("location:/mediseen/intro2.php");
}
/*else {
    session_unset();
    //echo "wrong username or password";
   header('Refresh: 2, URL= sign_up/index.php');
}*/
?>