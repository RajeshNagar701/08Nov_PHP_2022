<?php 

$f=fopen("raj.doc","r");
echo "<table align='center' border='2' width='100%' style='color:red'>";
while(!feof($f)) // file end of file
{
	echo "<tr><td>".fgets($f)."</td></tr>";	
	//echo fgetc($f) // fgetc file char line
}
echo "</table>";
fclose($f);


?>