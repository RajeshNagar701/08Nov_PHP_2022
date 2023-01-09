<?php
// insert api
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);

$pname = "car";//$data_arr["name"]; // value of pname
$pprice = "290000";//$data_arr["price"]; // value of price

require_once "dbconfig.php";

$query = "INSERT INTO tbl_product(product_name, product_price) 
                       VALUES ('".$pname."', '".$pprice."')";

if(mysqli_query($conn, $query) or die("Insert Query Failed"))
{
	echo json_encode(array("message" => "Product Inserted Successfully", "status" => true));	
}
else
{
	echo json_encode(array("message" => "Failed Product Not Inserted ", "status" => false));	
}

?>