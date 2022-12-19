
<?php
/*

Inheritance / Reusability 

It is a concept of accessing the features of one class from another class.
types

Single inheritance.
Multi-level inheritance.
Multiple inheritance.
Hierarchical Inheritance.
Hybrid Inheritance.

*/
// single level inheritance
class model
{
	public $a=10;
	public $b=20;
	function sum()
	{
		echo $sum=$this->a+$this->b."<br>";
	}
}

class control extends model
{
	function multi()
	{
		$this->sum();
		echo $this->a*$this->b;
	}
}
$obj=new control;
$obj->multi();
/*
1) single level

class a
{
	
}
class b extend a
{
	
}

obj: b
=================================

1) Multilevel 

class a
{
	
}
class b extend a
{
	
}
class c extends b
{
	
}

obj: c

=================================

3) Multiple inheritance.

class a
{
	
}
class b 
{
	
}
class c extends a,b  
{
	
}

obj: c // but Multiple Inhetitance not possible in php by extend / only one class extend

==============================================================

4)Hierarchical Inheritance.


class a
{
	
}
class b extends a
{
	
}
class c extends a  
{
	
}

obj : b and c

==============================================================
5)Hybrid Inheritance.


Mix of any two 


class a
{
	
}
class b extend a
{
	
}
class c extends b
{
	
}
class d extends a
{
	
}




*/




