
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>



<form method="post" align="center">
	<input type="text" name="search" value='<?php if(isset($search)){echo $search;}?>' placeholder="Search user by name" onkeyup="getData(this.value)">
</form>

<form action="" method="post">
	<table border="4" align="center" id="userdata" >
    <caption>Reg Form</caption>
    	
        <tr>
        <td>User id</td>
        <td>User Name</td>
        <td>Country Name</td>
        <td>State Name</td>
        <td>City Name</td>
        </tr>
  
        <?php
		if(!empty($user_arr))
		{			
			foreach($user_arr as $f)
			{
			?>
			<tr>
			<td><?php echo $f->id;?></td>
			<td><?php echo $f->name;?></td>
			<td><?php echo $f->cnm;?></td>
			<td><?php echo $f->snm;?></td>
			<td><?php echo $f->city_name;?></td>
			</tr>
			<?php
			 }
		}
		?>
        
        
   </table>
</form>



<script>
function getData(search)
{
	$.ajax
	({
		type: "POST",
		url: "searchData",
		data:"btn=" + search,
		success: function(data)
		{
			$("#userdata").html(data) ;
		}
	});
}
</script>
</body>
</html>