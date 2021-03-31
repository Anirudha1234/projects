<?php
 define('HOST','localhost:3325');
 define('USERNAME', 'root');
 define('PASSWORD','');
 define('DB','api_db');
 
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 
 $cl_id = $_POST['cl_id'];
 $game_id = $_POST['game_id'];
 $date = $_POST['date'];
 $play_count = $_POST['play_count'];
 $sess_count = $_POST['sess_count'];
 $ply_chip = $_POST['ply_chip'];
 $win_chip = $_POST['win_chip'];
 
 $sql = "insert into game values ('$cl_id','$game_id','$date','$play_count','$sess_count','$ply_chip','$win_chip')";
 
 if(mysqli_query($con, $sql)){
 echo 'success';
 }
?>