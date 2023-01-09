<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$pid = '12';//$data["id"];
$pname ='Audi Car';// $data["name"];
$pprice ='300000';//$data["price"];

require_once "dbconfig.php";

$query = "UPDATE tbl_product SET product_name= '".$pname."' , 
                                 product_price= '".$pprice."' 
                           WHERE product_id='".$pid."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{	
	echo json_encode(array("message" => "Product Update Successfully", "status" => true));	
}
else
{	
	echo json_encode(array("message" => "Failed Product Not Updated", "status" => false));	
}

?>