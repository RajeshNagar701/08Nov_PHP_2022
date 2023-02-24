<?php
$con=new mysqli("localhost","root","","onlinegtpl");
$sql="select * from user";
$res=$con->query($sql);

$xml='<?xml version="1.0" encoding="UTF-8"?>';
$xml.='<user>';
while($fetch=$res->fetch_object())
{
		$xml.='<uid>'. $fetch->uid .'</uid>';
		$xml.='<unm>'. $fetch->unm .'</unm>';
		$xml.='<pass>'. $fetch->pass .'</pass>';
		$xml.='<gen>'.  $fetch->gen .'</gen>';
		$xml.='<lag>'.  $fetch->lag .'</lag>';
		$xml.='<cid>'.  $fetch->cid .'</cid>';
		$xml.='<file1>'. $fetch->file1 .'</file1>';
		$xml.='<status>'. $fetch->status .'</status>';
}
$xml.='</user>';

$file=fopen("user.xml","w");
fwrite($file,$xml);
fclose($file);

?>
 