<?php

/*
$a=10;
$b=20;

$b=$a;
echo $b
*/


function test(&$a) // & refference use for transfer value to another var
{
	$a="this is a";
	$b="this is b"; 
}   
test($b);

echo $b;

?>