<?php
$a=array("a"=>"raj","b"=>"ishita","c"=>"nagar"); // key sort accendind order
ksort($a);
print_r($a);

echo "<br>";
krsort($a);     // key sort deccending order
print_r($a);
?>