<?php
// it usein allways in android and iphone for
// retrive data from server & database in $arr[] and than output convert in array array("uid"=>"8") to json_encode [{"uid":"8","unm":"vihaana"}]
// than call this page on call_webserveses.php and convert in encode to decode 

	$conn=new Mysqli('localhost','root','','laravel_pharmacy');

	$sel="select * from countries";
	$res=$conn->query($sel);
	
	while($r=$res->fetch_object())
		{
			$arr[]=$r;                                      
		}
		
	//print_r($arr);	
	echo $json_data=json_encode($arr);  // con
	//echo "<br>";
	//$decode_arr=json_decode($json_data);  // con
	//print_r($decode_arr);	
	
?>                                     