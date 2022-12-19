<html>
<head>
</head>
<body>
<?php

$color1="red";
$color2="yellow";
$color3="green";

echo $color1;

$colors=array("red","yellow","green","blue"); 

print_r($colors);

echo $colors[2]."<br>";



foreach($colors as $col_string)
{
	echo $col_string . "<br>";
}


?>
</body>
</html>