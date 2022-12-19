<?php

// There are four types of error in PHP

// 1) NOTICE ERROR :  undefined var / not terminate script

/*
$a=10;
$b=20;

echo $A;
echo $b."<BR>";
echo "Hello";
*/


// 2) syntex/perse error:  syntex problem like ;  {}  <?php   // terminate all script  

/*

$a=10;
$b=20
echo $a;
echo $b;
echo "Hello";

*/

//3) warning  : if you include any non existing file than warning occures // not terminate script

/*
include('include2.php');    // not terminate script 
echo "Hello";
echo "Hello";
*/




//4) fettale error : if you require any non existing file than fettale error occures //terminate script

require('Require2.php');    // terminate script 
echo "Hello";
echo "Hello";

?>