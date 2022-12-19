<?php

/*
$a=20;
$b=10;
echo $sum=$a+$b;
*/


// user defined function


function ami()
{
	$a=10;
	$b=20;
	echo $sum=$a+$b."<br>";
}
ami();


/*
function priya()
{
	$a=30;
	$b=20;
	echo $sum=$a+$b."<br>";
}
priya();
*/
/*
//buil in function predifined function
$abc="Raj nagar";

echo strlen($abc);

*/

// function with parameter / argument
/*
function sum($a,$b)
{
	echo $sum=$a+$b."<br>";
}
sum(5,10);
sum(50,10);
sum(57,10);
sum(5,100);
sum(5,108);
*/
/*
function select($tbl)
{
	echo $sel="select * from $tbl<br>";
}
select('feedback');
select('customer');
select('contact');
select('blog');
*/



// Default value

/*
function sum($a,$b="0")
{
	echo $sum=$a+$b."<br>";
}
sum(5,10);
sum(50);
sum(57,10);
sum(5);
sum(5,108);

*/





// Return in function

function raj()
{
	$a=10;
	$b=20;
	return $sum=$a+$b."<br>";
}
echo raj();
?>