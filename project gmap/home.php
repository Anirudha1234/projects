<!DOCTYPE html>
<html>
<head>
  <script src="jquery.3.3.1.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link href="bootstrap.min.css" rel="stylesheet"/>
</head>

<?php
session_start();
if(!isset($_SESSION['u'])){
echo "<script>
window.location='1.php';
</script>";
}
?>

<body style="background-color: #1C1B2D;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="font-size:3vh; font-family:Lucida Console;">
    <ul class="nav navbar-nav">
    	<li><img src="icon2.png"></li>
      <li><a href="info.php">Bus details</a></li>
      <li><a href="update.php">update</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>
</nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="5.jpg" alt="5" style="width:100%; height: 500px;">
        <div class="carousel-caption">
          <h3>AC Bus</h3>
          <p>Track your bus easily with our free website</p>
        </div>
      </div>

      <div class="item">
        <img src="4.jpg" alt="4" style="width:100%; height: 500px;">
        <div class="carousel-caption">
          <h3>Non-AC Bus</h3>
          <p>Track your bus around road-ways</p>
        </div>
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="3" style="width:100%; height: 500px;">
        <div class="carousel-caption">
          <h3>Local Bus</h3>
          <p>Track your bus around local areas</p>
        </div>
      </div>
  
      <div class="item">
        <img src="1.jpg" alt="3" style="width:100%; height: 500px;">
        <div class="carousel-caption">
          <h3>Global areas</h3>
          <p>comfortable bus services.</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left">
      <img src="left.png" style="width:100px; height: 100px;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right">
      <img src="right.png" style="width:100px; height: 100px;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="row">
<div class="col-md-3">
    </div>
<div class="col-md-6">
<p style="color: #C6C5D3;font-size: 6vh;">Happy journey!!! Stay safe.......</p></div>
<div class="col-md-3"></div>

</body>
</html>