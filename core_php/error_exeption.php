<?php
/*
What is an Exception
With PHP 5 came a new object oriented way of dealing with errors.

Exception handling is used to change the normal flow of the code execution 
if a specified error (exceptional) condition occurs. 
This condition is called an exception.


Try, throw and catch
To avoid the error from the example above, we need to create the proper code to handle an exception.

Proper exception code should include:

try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
catch - A "catch" block retrieves an exception and creates an object containing the exception information

*/
//create function with an exception
function checkNum($number) 
{
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum("5");
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>