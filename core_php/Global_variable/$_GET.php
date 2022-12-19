<html>
<head>
<title> </title>
</head>
<body>

<!-- 
Method  2

-->
<form action="" method="get">
    
	<p>Name: <input type="text" name="name"/></p>
	<p>Age: <input type="text" name="age"/></p>
	<p><input type="submit" name="submit" value="Click"/></p>
	
</form>


<?php

if(isset($_GET['submit']))
{
	echo $_GET['name'];
	echo $_REQUEST['age'];
}
?>




</body>
</html>
