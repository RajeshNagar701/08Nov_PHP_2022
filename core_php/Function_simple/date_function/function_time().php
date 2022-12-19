<?php

echo time();

date_default_timezone_set('asia/calcutta');
$onehour=time()+(60*60);  // 7days,24 hours,60 min, 60 sec
echo "<br/> This add 1 hours in time: ".date('h:i:s a',$onehour);  // add week in date 


$nextweek=time()+(7*24*60*60);  // 7days,24 hours,60 min, 60 sec
echo "<br/>" . date("d-m-y");
echo "<br/> This add week in date: ".date("d-m-y",$nextweek);  // add week in date 

?>