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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style type="text/css">
		<style type="text/css">
			*{
		margin: 0; padding: 0; box-sizing: border-box;
		}
		</style>
	</head>
	<body>
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
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="message.php">Messages</a></li>
                        <li><a class="dropdown-item" href="update-pass.php">Change Password</a></li>
                        <li><a class="dropdown-item" href="logout-user.php">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </nav>
	</body>
</html>