
<?php
/*
We will show different error handling methods:

Simple "die()" statements
Custom errors and error triggers
Error reporting
*/




$a;
if(isset($a)) 
{
  echo "a var is set";
} 
else 
{
  die("Error: The Var not set.");
  echo "hello";
}
?> 