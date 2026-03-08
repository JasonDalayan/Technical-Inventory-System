<?php  
//load database configuration file
include_once "technicalinventory.php";

//filter the excel data
function filterData(&$str){
	$str = preg_replace("/t/","\\t",$str);
	$str = preg_replace("/\r?\n/", "\\n", $str);
	if(strstr($str, '"')) $str = '"' . str_replace('"', '"', $str). '"';
}

//excel file name for download 
$fileName = "disposal-items".date('y-m-d'). ".xls";

//column names
$fields = array('item id', 'item name','device type', 'item description', 'item color', 'device price',' date of reuse');

//display column names as first row
$excelData = implode("\t", array_values($fields))."\n";

//fetch records from database
$query = $con->query("SELECT * FROM disposal");
if($query->num_rows > 0){

	//output each row of the data
	while($row = $query->fetch_assoc()){
		//$status = ($row['status'] == 1)?'Active':'Inactive';

		$lineData = array($row['item_id'], $row['itemname'], $row['item_type'], $row['itemdescription'], $row['item_color'], $row['itemprice'], $row['currentdate']);
		$excelData .= implode("\t", array_values($lineData)). "\n";

	}
}else{
	$excelData .= 'No records found...'."\n";
}

//headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename =\"$fileName\"");

//render excel data
echo $excelData;

exit();

?>
