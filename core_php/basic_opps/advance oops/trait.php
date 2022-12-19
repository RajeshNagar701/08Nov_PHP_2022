<?php   
/*

PHP only supports single inheritance: 
a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? 

OOP traits solve this problem.

Traits are declared with the trait keyword: as class
To use a trait in a class, use the use keyword: // for inheritance
Traits are used to declare methods that can be used in 
multiple classes. 

Traits can have methods and abstract methods that can be used in 
multiple classes, and the methods can have any access modifier 
(public, private, or protected).


*/



trait first  // use trait insted of class
{
	function method1()
	{
		echo "This is method1.<br>";
	}
    function method2()
	{
		echo "This is method2";
	}
}
class sample
{
	use first;  // here use word (use) for inheritance of class first
	
}
$obj= new sample;
$obj->method1();
$obj->method2();
?>
