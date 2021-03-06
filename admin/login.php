<?php
include('include/basicinfo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="include/register.inc.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a target="_blank" href="<?php echo $facebook?>" class="social"><i class="fab fa-facebook-f"></i></a>
				<a target="_blank" href="<?php echo $twitter?>" class="social"><i class="fab fa-twitter"></i></a>
				<a target="_blank" href="<?php echo $linkedin?>" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your user name for registration</span>
			<input required type="text" placeholder="User Name" name="user_name"/>
			<!-- <input type="email" placeholder="Email" name="email"/> -->
			<input required type="password" placeholder="Password" name="password"/>
			<button type="submit" value="singup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="include/login.inc.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a target="_blank" href="<?php echo $facebook?>" class="social"><i class="fab fa-facebook-f"></i></a>
				<a target="_blank" href="<?php echo $twitter?>" class="social"><i class="fab fa-twitter"></i></a>
				<a target="_blank" href="<?php echo $linkedin?>" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input required type="text" placeholder="User Name" name="user_name"/>
			<!-- <input type="email" placeholder="Email" name="email"/> -->
			<input required type="password" placeholder="Password" name="password"/>
			<a href="./include/forgotpassword.inc.php">Forgot your password?</a>
			<button type="submit" value="singin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="js/form.js"></script>
</body>
</html>