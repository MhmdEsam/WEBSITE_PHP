<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon"
    type="imgs/Logo.png"
    href="https://cdn.glitch.me/4a056743-d853-4bac-8293-6b6fd32c95de%2FLogo.png?v=1636520514320">
<title>Made For You &bull; Register </title>
<link rel="stylesheet" type="text/css" href="database.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="canonical" href="https://madeforyou.glitch.me/">
<meta name="copyright" content="(c) Copyright DevsAPP">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="375">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
<meta http-equiv="cleartype" content="on">
<meta name="theme-color" content="#36393f">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Made For You - Register">
<meta property="og:site_name" content="https://madeforyou.glitch.me/">
<meta property="og:description" content="DevsAPP">
<meta name="description" content="Made For You ">
<meta property="og:image" content="imgs/Logo.png" />
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="https://madeforyou.glitch.me/">
<meta name="twitter:title" content="Made For You &bull; Register">
<meta name="twitter:description" content="DevsAPP">
<meta name="google-site-verification" content=""></head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>