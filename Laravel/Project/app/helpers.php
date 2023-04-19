<?php
  
if(!function_exists('custome_date') ){
	
	Function custome_date($date,$format)
{
	$date_formated=date($format,strtotime($date));
	return $date_formated;
}
}


if(!function_exists('p') ){
	
	Function p($data)
	{
	Echo "<pre>";
	print_r($data);
	Echo "</pre>";
	}
}







?>