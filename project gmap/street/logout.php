<?php
session_start();
unset($_SESSION['uname']);
unset($_SESSION['pwd']);
header('Refresh: 0; URL = index.php');

?>