<?php
$con=new mysqli("localhost","root","","pharmacy");
$sql="select * from customer";
$res=$con->query($sql);
while($fetch=$res->fetch_object())
{
	$arr[]=$fetch;		
}

foreach($arr as $c)
{
	echo $c->uid . "<br>";
	echo $c->name . "<br>";
	echo $c->email . "<br>";
	echo $c->gen . "<br><br><br>";
}


?>
 