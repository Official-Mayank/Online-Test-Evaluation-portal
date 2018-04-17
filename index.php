<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel = "stylesheet" 
 type = "text/css" 
 href = "index.css"/>
<head>
	<title>Test Evaluation Portal</title>
</head>
<body align="center">
	<div class="content-wrapper">
		<div class="main-content">
			<div class="nav" id="home">
			 	<ul>
			 		<li style="float:left; margin-left:30px; height:24px"><a href="#"><img src="image/1.png"></a></li>
			 	    <li style="float:left;"><a href="#">Test Evaluation</a></li>
			 		<li id="login-btn"><a href="#login">Login</a></li>
			 	</ul>
			 </div>
			 <div class="center-text">
			 <h2 id="welcome-text">Welcome, It's time for test</h2>
			 </div>
		 </div>
		 <div class="login-include">
		 	<div class="limiter">
					<div class="wrap-login100">
						<form  action="login.php" method="post">
							<span class="login100-form-logo register-hide">
								<i class="zmdi zmdi-landscape"></i>
							</span>

							<span class="login100-form-title p-b-34 p-t-27 login-text">
								Log in
							</span>

							<div class="wrap-input100 validate-input register-show">
								<input class="input100" type="text" name="fullname" placeholder="Fullname">
								<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input register-show">
								<input class="input100" type="text" name="email" placeholder="Email">
								<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter username">
								<input class="input100" type="text" name="username" placeholder="Username">
								<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" type="password" name="pass" placeholder="Password">
								<span class="focus-input100"></span>
							</div>
							<div class="container-login100-form-btn register-hide">
								<button class="login100-form-btn login-btn">
									Login
								</button>
							</div>
							<center>
							<div class="container-login100-form-btn register-show" id="register">
								<button class="login100-form-btn login-btn" formaction="Register.php">
									Register
								</button>
							</div>
							</center>
							<div class="text-center p-t-10">
								<a class="txt1 register-btn" href="#">
									Sign Up
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		 </div>
	</div>
 </body>

  <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>

	var $loginShow = false;
	var $registerShow = false;

	$(document).ready(function() {

		$("#login-btn").click(function() {
			if(!$loginShow) {
				$(".login-include").show(400);
				$("body").addClass("darken-background");
			}
			else {
				$(".login-include").hide(400);
				$("body").removeClass("darken-background");
			}
			$loginShow = !$loginShow;
		})

		$(".register-btn").click(function() {
			console.log("register")
			if(!$registerShow) {
				$(".register-show").show(400);
				$(".register-hide").hide(400);
				$(".register-btn").html("Login");
				$(".login-btn").html("Register");
				$(".login-text").html("Register");

			}
			else {
				$(".register-show").hide(400);
				$(".register-hide").show(400);
				$(".register-btn").html("Sign Up");
				$(".login-btn").html("Login");
			}
			$registerShow = !$registerShow;
		})

	});

	</script>
</body>
</html>