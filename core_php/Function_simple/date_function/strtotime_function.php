<?php
$nextweek=time()+(7*24*60*60);  // 7days,24 hours,60 min, 60 sec
echo date("d-m-y");

echo "<br/> This add week in date: ".date("d-m-y",$nextweek);  // add week in date 

echo "<br/>This add week by strtotime".date("d-m-y",strtotime("+ 1 week")); // add week in date by strtotime      

?>