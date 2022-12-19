<?php

// include work as include file code

/*
include('include1.php'); 
include('include1.php');
echo "Morning";  
*/


// include_once same as include() but only include 1 time

// if file does not exits than iclude provide warning 


include_once('include1.php');
include_once('include1.php');
include_once('include1.php');
echo "Morning";

/*
Differance between include & include_once
=> include_once same as include() but only include 1 time

include gives warning error when file done not exits


// Incude & require both same but if file not exits than Incude define E_warning & Require Fetel Error
*/

?>