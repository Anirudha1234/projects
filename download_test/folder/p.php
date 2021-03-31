 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rajorpay";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$payment_id="ref56";
	$amt="65";
	$name="priyanshi";
	$payment_status="complete";
	$added_on=date('Y-m-d h:i:s');
$sql = "insert into payment (name,amount,payment_status,payment_id,added_on) values('$name','$amt','$payment_status','$payment_id','$added_on')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 