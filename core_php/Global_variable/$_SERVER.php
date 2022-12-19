<?php

//$_SERVER is a PHP super global variable which holds information 
//about headers, paths, and script locations.

// $_SERVER['PATH_INFO']  // GET PAGE URL


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTP_REFERER']."<br>";


?>
