<?php 
session_start();
require "../connection.php";
if(isset($_POST['submit']))
{
$email= $_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
$query=mysqli_query($con,$sql);

$row = mysqli_num_rows($query);
if ($row==1) {
    header('location:dashboard.php');
} else{
    header('location:adminlogin.php');
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Admin Login</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">


    </head>
    <body>
                    <div class="header">
            <h2><img src="../images/logo.png" alt="logo" style="width:90px;height:90px;float: left;"> Baitul Mamur Jame Masjid</h2>
            <h3 class="hero2">  <span class="change_content"> </span><span style="margin-top: -10px ; color: #00b894;"> | </span></h3>
        </div>
        
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top px-3 py-3"></nav>
    <div class="mt-5 container">
        <div class="row">
            <div class="col-md-3 offset-md-4 form login-form">
                <form action="adminlogin.php" method="POST" autocomplete="">
                    <h2 class="text-center">Admin Login</h2>
                    <p class="text-center">Login with your email and password.</p>
                    
                    <div class="form-group mt-4">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group mt-4">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                
                    <div class="form-group mt-4">
                        <input class="form-control button" type="submit" name="submit" value="submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="mt-5">
     <?php include('footer.php'); ?>   
     </div>                 
    </body>
</html>