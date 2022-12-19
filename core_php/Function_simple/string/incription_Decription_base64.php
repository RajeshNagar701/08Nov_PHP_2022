<?php
$text="Love";
echo $encode=base64_encode($text);  //THIS IS FOR SECURUTY PASSAWARD CHANGE IN DIFFERENT KEYWORD
echo "<br>". base64_decode($encode)."<br>";  //THIS IS FOR SECURUTY PASSAWARD CHANGE IN keyword to Real PASSAWARD 
echo "<br>". md5($text);  //convert in to string in diffrerent keyward
echo  "<br>". sha1($text);  
?>  