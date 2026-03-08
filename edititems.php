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

//set current timezone
date_default_timezone_set('Asia/Manila');
//store current timestamp
$_SESSION['reportdate'] = date("Y-m-d H:i:s");

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

	
<div class="devicead">
<form action="" method="post">
<?php  


$update = mysqli_query($con, "SELECT * FROM inventory WHERE id = '".$_GET['id']."'");
		$update2 = mysqli_fetch_array($update);

			$_SESSION['item_id'] = $update2['item_id'];
			$_SESSION['itemname'] = $update2['itemname'];
			$_SESSION['item_type'] = $update2['item_type'];
			$_SESSION['itemdescription'] = $update2['itemdescription'];
			$_SESSION['item_color'] = $update2['item_color'];
			$_SESSION['itemprice'] = $update2['itemprice'];
			
			echo "<label>Item_id</label><br>";
			echo "<input type='text' id='input' name='upitemid' value='{$update2['item_id']}'><br>";

			echo "<label>Device Name</label><br>";
			echo "<input type='text' id='input' name='upname' value='{$update2['itemname']}'><br>";
			
			echo "<label>Device type</label><br>";
			echo "<select name='uptype'>";
			echo "<option value='Keyboard'>Keyboard</option>";
			echo "<option value='Mouse'>Mouse</option>";
			echo "<option value='Monitor'>Monitor</option>";
			echo "<option value='PC'>PC</option>";
			echo "<option value='Cisco Switch'>cisco switch</option>";
			echo "<option value='Cisco Router'>cisco Router</option>";
			echo "<option value='projector'>Projector</option>";
			echo "<option value='Flat Screen Tv'>flat screen tv</option>";
			echo "</select><br>";

			echo "<label>Device description</label><br>";
			echo "<textarea name='itemdscrpt'>{$update2['itemdescription']}</textarea><br>";

			echo "<label>Device color</label><br>";
			echo "<input type='text' id='input' name='itemclr' value='{$update2['item_color']}'><br>";

			echo "<label>device price</label><br>";
			echo "<input type='text' id='input' name='itemprc' value='{$update2['itemprice']}'><br>";

			echo "<label>working process</label><br>";
			echo "<input type='radio' name='workp' value='working'>"."<label>working</label>"."<input type='radio' name='notworkp' value='notworking'>"."<label>not working</label><br>";

			echo "<input type='submit' class='edititems' name='ups' value='update'>";
		echo "</tr>";

		echo "</table>";	
?>
</form>
</div>

<?php  
if (isset($_POST['ups'])) {
			if (!empty($_POST['upname']) && !empty($_POST['uptype']) && !empty($_POST['itemdscrpt']) && !empty($_POST['itemclr']) && !empty($_POST['itemprc']) /*&& !empty($_POST['workp'])*/) {

				if (!empty($_POST['workp']) == "working") {
					$query = mysqli_query($con, "UPDATE inventory SET item_id = '".$_POST['upitemid']."',itemname = '".$_POST['upname']."',item_type = '".$_POST['uptype']."', itemdescription = '".$_POST['itemdscrpt']."', item_color = '".$_POST['itemclr']."', itemprice = '".$_POST['itemprc']."' WHERE id = '".$_GET['id']."' ");
					echo "<script>alert('the item is update')</script>";
					echo "<script>window.location.href='viewinventory.php'</script>";
				}
				else {
					if (!empty($_POST['notworkp']) == "notworking") {
		
					$recover = mysqli_query($con, "INSERT INTO notworking (item_id, itemname, item_type, itemdescription, item_color, itemprice, reportdate) VALUES ('".$_SESSION['item_id']."','".$_SESSION['itemname']."', '".$_SESSION['item_type']."', '".$_SESSION['itemdescription']."', '".$_SESSION['item_color']."', '".$_SESSION['itemprice']."','".$_SESSION['reportdate']."')");
					$fulldel = mysqli_query($con, "DELETE FROM inventory where id = '".$_GET['id']."' ");
					echo "<script>alert('the device has moved to notworking storage')</script>";
					echo "<script>window.location.href='viewinventory.php'</script>";

					}
					
				}
			}
			else{
				echo "<script>alert('update item fields')</script>";
			}
}
?>
</body>
</html>