<html>
<body>
 
<?php
if(isset($_REQUEST['submit'])) // get value by post method by $_REQUEST function s
{	
echo "Wellcome".$_REQUEST["name"]."<br>";
echo "Your Age". $_REQUEST["age"];
}
?>
</body>
</html>

