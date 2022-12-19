<?php

date_default_timezone_set("Asia/Calcutta");

echo "<br/>".$d=date("d/m/y")."<br/>";


$tommorrow=mktime(0,0,0,date("m")+1,date("d")+1,date("y")+1); // difine future date but add 0,0,0
echo "Toomoraw is".date("d/m/y",$tommorrow);







echo "<br/>".$d=date("H:i:s");
$t=mktime(date("H")+1,date("i"),date("s")); // difine future time but reemove 0,0,0 and fist set date_default_timezone_setsss
echo "<br/>". date("H:i:s",$t);

?>