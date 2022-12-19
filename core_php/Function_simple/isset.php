<?php
// check value of variable is set or not

$p=20;  

if(isset($p))
{
	echo "set";
}
else
{
	echo "Not set";
}

?>

<form>
<input type="submit" name="submit" value="Register">
</form>


<?php
if(isset($_REQUEST['submit']))
{
	echo "HELLO";
}
?>

