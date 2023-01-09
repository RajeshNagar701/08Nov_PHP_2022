<?php

$json=file_get_contents('http://localhost/students/02Aug_PHP_Rajesh/Webservices/webservices_form.php');

$arr=json_decode($json); // json econvert to arr
?>

<table border="2" width="80%" align="center">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Description</td>
		
	</tr>
	<?php
	foreach($arr as $d)
		{
		?>	
	<tr>
		<td><?php echo $d->id;?></td>
		<td><?php echo $d->cnm;?></td>
		<td><?php echo $d->desc;?></td>
	</tr>
		<?php
		}
?>
	
</table>





