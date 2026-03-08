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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

	<form action="" method="post">
	<?php
	$Q = mysqli_query($con, "SELECT * FROM admin_archived");

	$header = array('#','technical support id','username','email','usertype','action');
	$count = 0;

	echo "<div class='container'>";
		echo "<div class='tb_container'>";
			echo "<h2>user admin delete record</h2>";
			echo "<table class='tbl'>";
			echo "<thead>";
				echo "<tr>";;
				foreach ($header as $head) {
		
					echo "<th>$head</th>";
				}	
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
				while ($list = mysqli_fetch_array($Q)) {
				$count++;
				$_SESSION['tech_number'] = $list['tech_number'];
				$_SESSION['username'] = $list['username'];
				$_SESSION['password'] = $list['password'];
				$_SESSION['mail'] = $list['mail'];
				$_SESSION['usertype'] = $list['usertype'];

				echo "<td>$count</td>";
				echo "<td>{$list['tech_number']}</td>";
				echo "<td>{$list['username']}</td>";
				echo "<td>{$list['mail']}</td>";
				echo "<td>{$list['usertype']}</td>";
				echo "<td><input type='submit' name='rcvr' class='editfix' value='Recover'></td>";
				echo "</tr>";
	}
			echo "</tbody>";
				
			echo "</table>";

		echo "</div>";
	echo "</div>";
	?>
	</form>

	<?php  
	if (isset($_POST['rcvr'])) {
		$recover = mysqli_query($con, "INSERT INTO login (tech_number,username,password,mail,usertype) values ('".$_SESSION['tech_number']."', '".$_SESSION['username']."','".$_SESSION['password']."', '".$_SESSION['mail']."', '".$_SESSION['usertype']."')");
		$del = mysqli_query($con, "DELETE FROM admin_archived WHERE username = '".$_SESSION['username']."' ");
		echo "<script>alert('the useradmin has been recoverd')</script>";
		echo "<script>window.location.href='viewuseradminarchive.php'</script>";


	}
	?>
</body>
</html>