<?php
// data read or fetch API
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

require_once "dbconfig.php";

$query = "SELECT * FROM tbl_product";

$result = mysqli_query($conn, $query) or die("Select Query Failed.");

$count = mysqli_num_rows($result);

if($count > 0)
{	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);
}
else
{	
	
	echo json_encode(array("message" => "No Product Found.", "status" => false));
}

?>