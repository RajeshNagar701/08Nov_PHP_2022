<?php
/*
Interfaces are declared with the interface keyword:
Interfaces are characterized similarly as a class, 
however, only the interface keyword replaces the class phrase 
in the declaration and without any of the methods having their 
contents defined.
Interfaces allow you to specify what methods a class should 
implement.

PHP - Interfaces vs. Abstract Classes

Interfaces are similar to abstract classes. The difference between interfaces and abstract classes are:
Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary



*/


interface A1    // use interface insted of class
{
	function foo(); // if it interfave method than foo(); (;) must othrwise not
}
interface A2
{
	function bar();
}
class B implements A1,A2  // use extend impliments
  {
	 function foo() 
	 {
		 echo "This is A1 INTERFACE foo.<br>";
	 }
	 
	  function bar() 
	 {
		 echo "This is A2 INTERFACE bar.<br>";
	 }
    
  }
  

  $obj=new B;
  $obj->foo();

?>