<?php

/*

A constructor allows you to initialize an object's properties 
upon creation of the object.

If you create a __construct() function, PHP will automatically call 
this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!

We see in the example below, that using a constructor saves us from 
calling the set_name() method which reduces the amount of code:


__destruct()

destroy object of class
call in last 

*/


class abc
{
	function simple()
	{
		echo "Simple Function <br>";
	}
	
	function __construct()
	{
		echo "Magic function run auto matecaly<br>";
	}
	
	function display()
	{
		$this->simple();
		abc::__construct();  //   __construct call by ::(scopresolution) 
	}	
}

$obj=new abc;
$obj->display();



?>