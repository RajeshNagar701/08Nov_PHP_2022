<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

$data = json_decode(file_get_contents("php://input"), true);
$product_id = "2";//$data["product_id"];

require_once "dbconfig.php";

$query = "SELECT * FROM tbl_product WHERE product_id='$product_id'";

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

$count = mysqli_num_rows($result);

if($count > 0)
{	
	$row = mysqli_fetch_array($result);
	
	echo json_encode($row);
}
else
{	
	
	echo json_encode(array("message" => "No Product Found.", "status" => false));
}

?>