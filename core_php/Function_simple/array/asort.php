<?php
$a=array("a"=>"raj","b"=>"ishita","c"=>"nagar"); // value sort accendind order a-z
asort($a);
print_r($a);

echo "<br>";
arsort($a);     // value sort deccending order  z-a
print_r($a);
?>