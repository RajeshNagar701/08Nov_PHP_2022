<html>
<head>
<title>$_get </title>
</head>
<body>

<!--

Many web applications are connected to a database. The database holds all the information the web application 
wish to store and use.
SQL Injection is a technique which allows attackers to manipulate the SQL ("Structured Query Language") 
the developer of the web application is using. This typically happens because of lack of data sanitization. 
SQL is used regularly by developers to access database resources. 

$first_name=real_escape_string($_REQUEST['firstname']);

This both function convert query into string than we avoid sql injection
-->

<form action="" method="post">      <?  // make form with action on $_GET function?>
<p>Name: <input type="text" name="name"/></p>
<p>Age: <input type="text"name="age"/></p>

<p><input type="submit" name="submit" value="Click"/></p>
</form>
<?php

$mysqli = new mysqli('localhost','root','','test');


if(isset($_POST['submit']))
{
	echo $firstname = $mysqli->real_escape_string($_POST['name']);
	
	// Escape special characters, if any
	echo $age = mysqli_real_escape_string($mysqli, $_POST['age']);
	
}

?>




</body>
</html>
