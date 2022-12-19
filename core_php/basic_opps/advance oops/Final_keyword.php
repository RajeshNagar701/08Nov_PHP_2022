<?php

/*
 PHP  introduces the final keyword, which prevents child classes from 
overriding a method by prefixing the definition with final. 
If the class itself is
being defined final then it cannot be extended.


*/

final class a
{
	 function test()
	{
		echo "This is final method";
	}
}
class b extends a
{
	function test()
	{
	 echo "This is final method of b class";
    }
}
?>