<?php

/*
An abstract class or method is defined with the abstract keyword:
An object of an abstract class can't be made.
An abstract class is a class that contains at least one 
abstract method. 

An abstract method is a method that is declared, 
but not implemented in the code.

When inheriting from an abstract class, the child class method 
must be defined with the same name, and the same or a less 
restricted access modifier. So, 
if the abstract method is defined as protected, the child class 
method must be defined as either protected or public, but not private.

*/

abstract class A  // define abstract before class declare in main class
{
	abstract function foo();    // alwayas use abstract method and also use simple method // if it interfave method than foo(); (;) must othrwise not
	  
	function simple()           // also use simple method
	{
		echo "This is Simple method";
	}
}
class B extends A
{
	function foo()                  // allways listern abstract method in main class must used in extend class like B & C
	{
		echo "This is B class foo method";
	}
	
}
class C extends A
{
	
}
$c=new c();    // call all method by obj
$c->foo();

?>