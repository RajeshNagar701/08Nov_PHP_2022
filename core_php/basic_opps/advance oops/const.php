<?php
/*

const my_const="const_value";

Constants are one type of variable which 
we can define for any class with keyword const.
Value of these variables cannot be changed anyhow after assigning.
Class constants are different from normal variables, 
as we do not need $ to declare the class constants.
If we are inside the class then values of the constants can be get using self keyword, 
but accessing the value outside the class you have to use Scope Resolution Operator.
we don't need to take object for const class we can call without object
visiblity all time public must

*/
class abc
{
	public const my_const="const_value";   // in static keyword use in static variable use like $my_static
	
	function display()
	{
		//echo self::my_const;  // foo::$my_static;
		echo abc::my_const;
	}
}
class xyz extends abc
{
	public function display2()
	{
		//echo parent::$my_const;
		echo abc::my_const;
	}
}
 echo abc::my_const;  // we can call without object
 

 
 
?>