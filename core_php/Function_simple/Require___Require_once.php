<?php

// require work as require file code


require('Require1.php'); 
require('Require1.php');
echo "Morning";  



// require_once same as require() but only require 1 time

// if file does not exits than iclude provide warning 

/*
require_once('Require1.php');
require_once('Require1.php');
require_once('Require1.php');
echo "Morning";
*/

/*
Differance between require & include_once
=> include_once same as require() but only require 1 time

require gives Fetel error when file done not exits


// Incude & require both same but if file not exits than Incude define E_warning & Require Fetel Error
*/

?>