<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- include header file -->
    <?php include "includes/header2.php";?>
    <section style="padding-top:70px;padding-bottom:40px">
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
<section style="padding-top:70px">
        <footer class="w-100 text-center text-lg-start text-white" style="background-color: #45526e">
            <div class="container p-2 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-2 font-weight-bold"> Masjid Name </h6>
                            <p>Baitul Mamur Jame Masjid</p>
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
                            <p>
                                <a class="text-white" href="#">About</a>
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
</section>
    
</body>
</html>