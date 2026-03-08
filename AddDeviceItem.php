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

if (isset($_POST['subm'])) {
	$itemid = $_POST['itemid'];
	$itemname = $_POST['itemname'];
	$Dtype = $_POST['Dtype'];
	$descript = $_POST['descript'];
	$priceI = $_POST['priceI'];
	$itemC = $_POST['itemC'];

	$item = mysqli_query($con, "INSERT INTO inventory (item_id, itemname, item_type, itemdescription, item_color, itemprice) values ('$itemid','$itemname','$Dtype','$descript','$itemC','$priceI')");

	echo "<script>alert('the item has added to inventory')</script>";

	echo "<script>window.location.href='viewinventory.php'</script>";

}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Technical Admin System</title>
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
	<h2>add item</h2>	
	<form action="" method="post">
		<label>Enter item id</label><br>
		<input type="text" name="itemid" required><br>

		<label>Enter item name</label><br>
		<input type="text" name="itemname" required><br><br>

		<select name="Dtype">
			<option value=""hidden>select types of device</option>
			<option value="Keyboard">Keyboard</option>
			<option value="Mouse">Mouse</option>
			<option value="Monitor">Monitor</option>
			<option value="PC">PC</option>
			<option value="Cisco Switch">cisco switch</option>
			<option value="Cisco Router">cisco Router</option>
			<option value="projector">Projector</option>
			<option value="Flat Screen Tv">flat screen tv</option>
		</select><br><br>

		<label>Enter item price</label><br>
		<input type="text" name="priceI" required><br>

		<label>Enter item description</label><br>
		<textarea name="descript" requried></textarea><br>

		<label>Enter item color</label><br>
		<input type="text" name="itemC" required><br><br>

		<input type="submit" name="subm" class='edititems' value="add item of device">
	</form>
	</div>
</body>
</html>