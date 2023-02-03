<?php
$f=fopen("new.txt","w");
fwrite($f,'welcome to tops<br>heloo how are you');
fclose($f);

$f=fopen("new.txt","r");
while(!feof($f)) // file end of file
{
    echo fgets($f)."<br>"; // fgets file string line 
	//echo fgetc($f)."<br>"; // fgetc get one one char 
}
fclose($f);
?>
