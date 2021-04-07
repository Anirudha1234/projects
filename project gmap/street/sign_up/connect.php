<?php
//$name = $_POST['username'];
//echo $name."##";
// }
//if (isset($_POST['userid'])) {
session_start();
$username = $_POST['userid'];
$_SESSION['uid'] = $username;
//}
$name = $_POST['username'];
$_SESSION['usn'] = $name;
//if (isset($_POST['useremail'])) {
$email = $_POST['useremail'];
$_SESSION['mail'] = $email;
//}
//if (isset($_POST['usercontact'])) {
$contact = $_POST['usercontact'];
//}
//if (isset($_POST['userpass'])) {
$pass = $_POST['userpass'];
//}


$usrname = 'root';
$password = '';
$hostname = 'localhost:3306';
//connection to the database
$conn = mysqli_connect($hostname, $usrname, $password)
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysqli_select_db($conn, "mediseen")
or die("Could not select mediseen");
//echo("Connected to mediseen");
//execute the SQL query and return records

if(!empty($_POST))
{
    $sql = "INSERT INTO user_detail(user_id, user_name, user_email, user_phone, user_pwd) VALUES ('$username', '$name', '$email', '$contact', '$pass')";
    //echo $sql;
    $exec = mysqli_query($conn, $sql);

    if (!$exec) {
        die('Could not enter data: ' . mysqli_error($conn));
    }


    //echo "Entered data successfully\n";
    header('location: /Mediseen/intro1.php');
    mysqli_close($conn);
}
else
    echo "Couldnt submit form as it is empty";
    ?>