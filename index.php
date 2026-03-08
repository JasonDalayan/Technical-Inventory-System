<?php  
include "technicalinventory.php";
session_start();
include "loginstyle.php";

if (isset($_POST['login'])) {
	$adname = $_POST['adname'];
	$adpass = $_POST['adpass'];
	$Q = mysqli_query($con, "SELECT * FROM login where username = '$adname' and password = '$adpass'");

	if ($logs = mysqli_num_rows($Q) > 0) {
		$R = mysqli_fetch_array($Q);
		if ($R['usertype'] == 'admin') {
			$_SESSION['legit'] = $R['username'];
			$_SESSION['utype'] = $R['usertype'];
			echo "<script>alert('Welcome, {$R['username']}!')</script>";
			echo "<script>window.location.href='admin.php'</script>";
		}
	}
	else{
		echo "<script>alert('incorrect username or password')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/ccplogo.png">
	<title></title>
</head>
<body>

	

	<div class="center">
		<h1>Login</h1>
	<form action="" method="post">
		<div class="txt_field">
			<input type="text" name="adname" minlength="5" required>
			<span></span>
			<label>Enter username</label>
		</div>

		<div class="txt_field">
			<input type="password" name="adpass" minlength="5" required>
			<span></span>
			<label>Password</label>
		</div>

			<input type="submit" name="login" value="enter login">
		
	</form>
	</div>

	 <!-- Loader element with "hidden" class initially -->
    <div class="body">
        <div class="loader hidden" id="loader">
            <img src="oldlogo.png" alt="Logo" class="logo" id="logo">
        </div>
    </div>

	<script src="ikot.js"></script>
</body>
</html>