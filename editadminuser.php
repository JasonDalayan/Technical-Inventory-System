<?php  
include "technicalinventory.php";
session_start();
include "adminstyle.php";

if (!isset($_SESSION['legit'])) {
	echo "<script>alert('pls login first')</script>";
	echo "<script>window.location.href='index.php'</script>";
}

if (isset($_POST['logout'])) 
{
	session_destroy();
	echo "<script>alert('you are now logout')</script>";
	echo "<script>window.location.href='index.php'</script>";
}


if (isset($_POST['upsub'])) {
	if (!empty($_POST['uptechnum']) && !empty($_POST['upusers']) && !empty($_POST['uppass']) && !empty($_POST['upemail'])) {
		$query = mysqli_query($con, "UPDATE login SET tech_number = '".$_POST['uptechnum']."', username = '".$_POST['upusers']."', password = '".$_POST['uppass']."', mail = '".$_POST['upemail']."' WHERE id = '".$_GET['id']."' ");

		echo "<script>alert('the admin user is updated')</script>";
		echo "<script>window.location.href='viewuseradmin.php'</script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="icon" type="image/png" href="images/ccplogo.png">
	<title></title>
</head>
<body>

	<div class="head">
		 <a href="#"><img src="cclogo2.png"  class="cclogo"></a>
		 <!--<h2 class="centralians">Central colleges of the philippines</h2>-->
	</div>

	<label>
		<!--<input type="checkbox" id="checks">
		<div class="toggle">
			<span class="top_line common"></span>
			<span class="middle_line common"></span>
			<span class="bottom_line common"></span>
		</div>-->

		<div class="slide">
			<h1>TECHNICAL SYSTEM</h1>
			<ul>
				<li>
					<a href="admin.php"  class="<?php if($page == "admin.php"){echo "nav-link active";}else{echo "nav-link";} ?>" >
						<i class="fa fa-pie-chart"></i> dashboard
					</a>
				</li>
				<li>
					<a href="viewuseradmin.php" class="<?php if($page == "viewuseradmin.php"){echo "nav-link active";}else{echo "nav-link";} ?>"><i class="fa fa-user">
					</i> view user admin
					</a>
				</li>
				<li>
					<a href="AddDeviceItem.php" class="<?php if($page == "AddDeviceItem.php"){echo "nav-link active";}else{echo "nav-link";} ?>"><i class="fa fa-plus-square">
					</i> add item device
					</a>
				</li>
				<li>
					<a href="viewinventory.php" class="<?php if($page == "viewinventory.php"){echo "nav-link active";}else{echo "nav-link";} ?>"><i class="fas fa-database"></i></i> view inventory Device
					</a>
				</li>
				<li>
					<a href="viewreports.php" class="<?php if($page == "viewreports.php"){echo "nav-link active";}else{echo "nav-link";} ?>"><i class="fas fa-bell"></i> view reports
					</a></li>
				<li>
					<a href="viewreuse.php"><i class="fa fa-recycle"></i> view Reuse
					</a>
				</li>
				<li>
					<a href="viewdisposal.php"><i class="fas fa-trash"></i> view Disposal
					</a>
				</li>
				<li>
					<a href="viewuseradminarchive.php"><i class="fa fa-user-times"></i> view user admin archive
					</a>
				</li>

			</ul>
			<div class="logout_container">
			<form action="#" method="post"> 
				<input type="submit" class='logout_btn' name="logout" value="logout">
			</form>
			</div>
		</div>
		
	</label>



	<div class="devicead">
	<form action="#" method="post"> 
	<?php
	$Q = mysqli_query($con, "SELECT * FROM login where id = '".$_GET['id']."'");
	$update = mysqli_fetch_array($Q);

	echo "<label>technical support id</label><br>";
	echo "<input type='text' id='input' name='uptechnum' value='{$update['tech_number']}'><br>";
	echo "<label>username</label><br>";
	echo "<input type='text' id='input' name='upusers' value='{$update['username']}'><br>";
	echo "<label>password</label><br>";
	echo "<input type='text' id='input' name='uppass' value='{$update['password']}'><br>";
	echo "<label>email</label><br>";
	echo "<input type='text' id='input' name='upemail' value='{$update['mail']}'><br><br>";
	echo "<input type='submit' class='edititems' name='upsub' value='Submit'>";
	?>
	</form>
	</div>
</body>
</html>