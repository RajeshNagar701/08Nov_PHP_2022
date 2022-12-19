
<?php
/*

Polymorphism in PHP
This word is can from Greek word poly and morphism. 
Poly means "many" and morphism means property which help 
us to assign more than one property. 


*/

//=> Overloading Same method name with different parameter, 
//since PHP doesn't support method overloading concept 

/*
class abc
{
	
	function sum($a,$b)
	{
		echo $a+$b;
	}
	
	function sum($a,$b,$c)
	{
		echo $a+$b+$c;
	}
}

$obj=new xyz;
$obj->sum(5,10);
$obj->sum(5,10,5);

Note : overloading not posible in PHP 
*/


//=> Overriding When same methods defined in parents and child class 
//with same signature
 
//i.e know as method overriding


class abc
{
	function sum($a,$b)
	{
		echo $a+$b;
	}
}
class xyz extends abc
{
	
	function sum($a,$b)
	{
		abc::sum(5,7);
		echo $a*$b;
	}
}

$obj=new xyz;
$obj->sum(5,10);

