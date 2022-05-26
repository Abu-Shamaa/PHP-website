<?php
session_start();
require "connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
		<link href="css/style.css" rel="stylesheet">
		<title>website</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
	</head>
	<body>
		
		<div class="header">
			<h2><img src="images/logo.png" alt="logo" style="width:90px;height:90px;float: left;"> Bitul Mamur Jame Masjid</h2>
			<h3 class="hero2">  <span class="change_content"> </span><span style="margin-top: -10px ; color: #00b894;"> | </span></h3>
		</div>
		
		    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top px-3 py-3">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold text-uppercase" href="index.php">HOME</a>
            </li>
           <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href=""onclick="myFunction()">PRAYER-TIME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href="" onclick="myFunction()">ABOUT</a>
                </li>
			
            <li class="nav-item dropdown">
                            <a class="nav-link text-white font-weight-bold text-uppercase dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" onclick="myFunction()">Program & Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="" onclick="myFunction()">Islamic Education Foundation</a></li>
                                <li><a class="dropdown-item" href="" onclick="myFunction()">BMJM Library</a></li>
                                <li><a class="dropdown-item" href="" onclick="myFunction()">Program for Shab-e-Meraj</a></li>
                                <li><a class="dropdown-item" href="" onclick="myFunction()">Program for Shab-e-Qadr</a></li>
                                <li><a class="dropdown-item" href="" onclick="myFunction()">Ask Question to Imam</a></li>
                            </ul>
                        </li>                        <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="" onclick="myFunction()">Our Organization</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="" onclick="myFunction()">Events</a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link text-white font-weight-bold text-uppercase" href="" onclick="myFunction()">GALLERY</a>
            </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="" onclick="myFunction()">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="" onclick="myFunction()">Contact-Us</a>
                    </li>
                     
			 <li class="nav-item">
                <a class="nav-link text-white font-weight-bold text-uppercase" href="login-user.php">SIGN-IN</a>
            </li>
        </ul>
    </nav>

    <script>
function myFunction() {
  alert("Please login!");
}
</script>
    <!-- Carousel -->	
<div id="slider" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/msq1.jpg" alt="msq1" height="400">
      <div class="carousel-caption">
        <h3>Bitul Mamur Jame Masjid</h3>
        <p>A Place of Worship for Muslim</p>
        <a class="btn btn-outline-light font-weight-bold" href="signup-user.php">Join us now...</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/msq3.jpg" alt="msq3" height="400">
      <div class="carousel-caption">
        <h3>Bitul Mamur Jame Masjid</h3>
        <p>Donate a Place for Sajadah </p>
        <a class="btn btn-outline-light font-weight-bold" href="signup-user.php">Join us now...</a>
      </div> 
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100" src="images/msq2.jpg" alt="msq2" height="400">
      <div class="carousel-caption">
        <h3>Bitul Mamur Jame Masjid</h3>
        <p>Please Donate Generously</p>
        <a class="btn btn-outline-light font-weight-bold" href="signup-user.php">Join us now...</a>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<section style="padding-top:40px;padding-bottom:20px">
	<div class="container ms-auto">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
    	<h2 class="fw-bold">Welcome to Bitul Mamur Jame Masjid</h2>
    	<p class="mt-3">
    		Bitul Mamur Jame Masjid at Mohorkaya, Lalpur, Natore was established in 2005.  Today, it is primarily used for religious purposes. As well as holding the 5 times prayers, there is accommodation for evening Arabic classes, space for women and young people and a purpose built dead-body washing facilities.</p>
        <p class="mt-3">

        </p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
    	
       <div class="container text-center">
        <h2 class="mb-3 fw-bold">Prayer-Time</h2>
    <iframe src="https://timesprayer.com/widgets.php?frame=2&amp;lang=en&amp;name=salt&amp;avachang=true" style="border: none; overflow: hidden; width: 400px; height: 300px;"></iframe>
     </div>
    </div>
  </div>
</div>

</section>
<!-- footer -->
<?php include "includes/footer.php";?>
	</body>
</html>