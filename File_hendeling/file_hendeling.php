<?php
$file=fopen("raj.doc","r");


while(!feof($file)) // file end of file
{
    echo fgets($file)."<br>"; // fgets file string line 
}

//echo $addtext=fread($file,filesize('raj.doc'));
fclose($file);

?>