
<html>
<head>
<title>$_request </title>
</head>
<body>
<form action="" method="post">
	<p>Name: <input type="text" name="name"/></p>
	<p>Age: <input type="text"name="age"/></p>
	<p><input type="submit"name="submit"value="Click"/></p>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
	echo $name=$_REQUEST['name'];
	echo $age=$_REQUEST['age'];
}

?>
