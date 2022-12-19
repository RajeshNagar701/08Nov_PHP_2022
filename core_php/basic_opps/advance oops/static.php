<?php
/*
Static properties can be called directly - 
without creating an instance(object) of a class.
Static properties are declared with the static keyword:
To access a static property use the class name, 
double colon (::), and the property name:
visiblity all time public must

*/
class abc
{	
	public static $my_static="i m foo"; 
	public $simple_var="hello";
	
	public function static_foo()
	{
		echo $this->simple_var; // normal var call by $this
		echo abc::$my_static;
		//echo self::$my_static;  // foo::$my_static;
	}
}
class xyz extends abc
{
	public function static_bar()
	{
		echo $this->$simple_var;
		echo abc::$my_static;
		//echo parent::$my_static;
		
	}
}

echo abc::$my_static;  
 
 
?>