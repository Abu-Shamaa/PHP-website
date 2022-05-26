<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
$sql = "SELECT * FROM usertable WHERE email = '$email'";
$run_Sql = mysqli_query($con, $sql);
if($run_Sql){
$fetch_info = mysqli_fetch_assoc($run_Sql);
$status = $fetch_info['status'];
$code = $fetch_info['code'];
if($status == "verified"){
if($code != 0){
header('Location: reset-code.php');
}
}else{
header('Location: user-otp.php');
}
}
}else{
header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $fetch_info['name'] ?> | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/push.min.js"></script>
        <script src="js/serviceWorker.min.js"></script>

        <style type="text/css">
        *{
        margin: 0; padding: 0; box-sizing: border-box;
        }
        </style>
    </head>
    <body>
        <div class="header">
            <h2><img src="images/logo.png" alt="logo" style="width:90px;height:90px;float: left;"> Bitul Mamur Jame Masjid</h2>
            <h3 class="hero2">  <span class="change_content"> </span><span style="margin-top: -10px ; color: #00b894;"> | </span></h3>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top px-3 py-3">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mx-auto">
                       <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold text-uppercase" href="home.php">My Home</a>
                        </li>
               <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href="prayer-time2.php">PRAYER-TIME</a>
                </li>
                        <li class="nav-item">
                    <a class="nav-link text-white font-weight-bold text-uppercase" href="about2.php">ABOUT</a>
                </li>
                
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white font-weight-bold text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Program & Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="islamic-education.php">Islamic Education Foundation</a></li>
                                <li><a class="dropdown-item" href="library.php">BMJM Library</a></li>
                                <li><a class="dropdown-item" href="shab-e-meraj.php">Program for Shab-e-Meraj</a></li>
                                <li><a class="dropdown-item" href="shab-e-qadr.php">Program for Shab-e-Qadr</a></li>
                                <li><a class="dropdown-item" href="ask-question.php">Ask Question to Imam</a></li>
                            </ul>
                        </li>                        <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="organization.php">Our Organization</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link text-white font-weight-bold text-uppercase" href="gallery.php">GALLERY</a>
            </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="donate.php">Donate</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold text-uppercase" href="contact.php">Contact-Us</a>
                    </li>
                </ul>
                <div class="dropdown dropstart text-end">
                    <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown"> <a href="logout-user.php" class="text-decoration-none"><i class='fas fa-user-tie'></i> <?php echo $fetch_info['name'] ?> </a></button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">Profile </button></li>
                        <li><a class="dropdown-item" href="message.php">Messages</a></li>
                        <li><a class="dropdown-item" href="update-pass.php">Change Password</a></li>
                        <li><a class="dropdown-item" href="logout-user.php">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </nav>
    <div class="offcanvas offcanvas-end" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">User Profile</h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <h3 class="mt-4"><i class='fa fa-user'></i> <?php echo $fetch_info['name'] ?></h3>
            <h3 class="mt-4"><i class='fa fa-envelope'> </i><?php echo $fetch_info['email'] ?></h3>
            <h3 class="mt-4"><i class='fa fa-phone'></i> <?php echo $fetch_info['phone'] ?></h3>
            <h3 class="mt-4"><i class='fa fa-home'></i> <?php echo $fetch_info['address'] ?></h3>
            <div class=" text-center mt-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><i class='fa fa-edit'></i>Update Profile</button>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container mt-3">
                        <form action="update-profile.php" method="post">
                            <div class="mb-3 mt-3">
                                <label for="name">Full-Name:</label>
                                <input type="text" value="<?php echo $fetch_info['name'] ?>" class="form-control" placeholder="Enter name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Phone:</label>
                                <input type="text" value="<?php echo $fetch_info['phone'] ?>" class="form-control" placeholder="Enter phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address:</label>
                                <input type="text" value="<?php echo $fetch_info['address'] ?>" class="form-control" placeholder="Enter address" name="address" required>
                            </div>
                            <div class="mb-3 mt-4">
                                <button type="submit" name="edit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  
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
      <img class="d-block w-100" src="images/msq2.jpg" alt="msq1" height="400">
      <div class="carousel-caption">
        <h3>Bitul Mamur Jame Masjid</h3>
        <p>A Place of Worship for Muslim</p>
        <a class="btn btn-outline-light font-weight-bold" href="donate.php">Donate now...</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/msq3.jpg" alt="msq3" height="400">
      <div class="carousel-caption">
        <h3>Bitul Mamur Jame Masjid</h3>
        <p>Donate a Place for Sajadah </p>
        <a class="btn btn-outline-light font-weight-bold" href="donate.php">Donate now...</a>
      </div> 
    </div>
    <div class="carousel-item">
      <img  class="d-block w-100" src="images/msq1.jpg" alt="msq1" height="400">
      <div class="carousel-caption">
        <h3>Bitul Mamur Jame Masjid</h3>
        <p>Please Donate Generously</p>
        <a class="btn btn-outline-light font-weight-bold" href="donate.php">Donate now...</a>
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
    
    <footer class="w-100 text-center text-lg-start text-white mt-5" style="background-color: #45526e">
        <div class="container p-2 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-2 font-weight-bold"> Masjid Name </h6>
                        <p>Bitul Mamur Jame Masjid</p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-2 font-weight-bold">Services & Facilities</h6>
                        <p class="text-white">Jumma</p>
                        <p class="text-white">Arabic Class</p>
                        <p class="text-white">Arabic Class For Adult</p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-2 font-weight-bold"> Useful links </h6>
                        <p>
                            <a class="text-white" href="signup-user.php">Sign Up</a>
                        </p>
                        <p>
                            <a class="text-white" href="login-user.php">Sing In</a>
                        </p>
                        
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-2 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Mohorkaya, Lalpur, Natore, BD</p>
                        <p><i class="fas fa-envelope mr-3"></i> bmjm@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +880123456789</p>
                    </div>
                </div>
            </section>
            <hr class="my-2">
            <section class="p-2 pt-0">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <div class="p-2">© 2021 Copyright: Masjid. All Rights Reserved.</div>
                    </div>
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                        <i class="fab fa-google"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
</footer>

<script>
    Push.create("Hey! <?php echo $fetch_info['name'] ?>", {
    body: "Find your books from BMJM library",
    icon: 'images/logo.png',
    timeout: 8000,
    onClick: function () {
        window.location="http://localhost/poragphp/library.php";
        this.close();
    }
});
    Push.create("Hey! <?php echo $fetch_info['name'] ?>", {
    body: "Look at the new event of BMJM",
    icon: 'images/logo.png',
    timeout: 6000,
    onClick: function () {
        window.location="http://localhost/poragphp/events.php";
        this.close();
    }
});    
    Push.create("Assalamualaikum :) <?php echo $fetch_info['name'] ?>", {
    body: "Thanks for Join BMJM",
    icon: 'images/logo.png',
    timeout: 4000,
    onClick: function () {
        
        this.close();
    }
});
    
        
    </script>
</body>
</html>