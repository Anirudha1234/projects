<?php
session_start();

$name = $_POST['shopname'];
$_SESSION['shp'] = $name;
$username = $_POST['susername'];
$_SESSION['susr'] = $username;
$email = $_POST['smail'];
$_SESSION['mail'] = $email;
$contact = $_POST['spno'];
$addr = $_POST['saddr'];
$ot = $_POST['sot'];
$ct = $_POST['sct'];
$pass = $_POST['spass'];

$usrname = 'root';
$password = '';
$hostname = 'localhost:3306';
//connection to the database
$conn = mysqli_connect($hostname, $usrname, $password)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db($conn, "mediseen")
or die("Could not select mediseen");
echo("Connected to mediseen");
//execute the SQL query and return records

if(!empty($_POST))
{
    $sql = "INSERT INTO shop_details(shop_name, shop_usn, shop_addr, shop_phone, shop_email, shop_pass, shop_open, shop_close) VALUES ('$name', '$username', '$addr', '$contact', '$email', '$pass', '$ot', '$ct')";
    echo $sql;
    $exec = mysqli_query($conn, $sql);
    print_r($_POST);
    if (!$exec) {
        die('Could not enter data: ' . mysqli_error($conn));
    } else {
        $sql2 = "Create table $username (med_name VARCHAR(50), med_comp VARCHAR(50))";
        echo $sql2;
        mysqli_query($conn, $sql2);
        //echo "Entered data successfully\n";
        header('location: /Mediseen/intro3.php');
    }
}
else
    echo "Couldn't enter data as the form is empty";
mysqli_close($conn);
?>