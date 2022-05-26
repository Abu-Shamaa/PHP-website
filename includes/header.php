<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
		<style type="text/css">
			*{
		margin: 0; padding: 0; box-sizing: border-box;
		}
		</style>
	</head>
	<body>
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
                            <a class="nav-link text-white font-weight-bold text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" onclick="myFunction()">Program & Services</a>
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
	</body>
</html>