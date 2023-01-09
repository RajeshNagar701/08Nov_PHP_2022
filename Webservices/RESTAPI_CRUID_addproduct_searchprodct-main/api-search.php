<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");


$data = json_decode(file_get_contents("php://input"), true);

$psearch = "LG";//$data["search"];

require_once "dbconfig.php";

$query = "SELECT * FROM tbl_product WHERE product_name LIKE '".$psearch."%' ";

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

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