
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Tra	nsitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
function getState(cid)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();	
	}
	else
	{
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("sid").innerHTML=xmlhttp.responseText;	
		}
	}
xmlhttp.open("GET","statedata?btn=" + cid,true);
xmlhttp.send();
}
function getCity(sid)
{
	$.ajax
	({
		type: "POST",
		url: "citydata",
		data:"btn=" + sid,
		success: function(data)
		{
			$("#city_id").html(data) ;
		}
	});
}
</script>
</head>
<body>
<a href="show">Show add data</a>
<form action="" method="post">
	<table border="4" align="center">
    <caption>Reg Form</caption>
    	
        <tr>
        <td>User Name</td>
        <td><input type="text" name="name" required></td>
        </tr>
    	<tr>
        	<td>Country</td>
            
            <td>
            <select name="cid" onchange="getState(this.value)" required>
			<option>----Select Country----</option>
            <?php
            	foreach($country_arr as $f)
				{				
			?>
            	<option value="<?php echo $f->cid;?>">
								<?php echo $f->cnm; ?>
			    </option>
            <?php 
				}
			?>

            </select>
      	     </td>
        
        </tr>
        <tr>
        	<td>State</td>
        	<td>
            <select id="sid" name="sid" onchange="getCity(this.value)" required>
            	<option>----Select State----</option>
            </select>
            </td>
        </tr>
        <tr>
        	<td>City</td>
        	<td>
            <select id="city_id" name="city_id" required>
            	<option>----Select city----</option>
            </select>
            </td>
        </tr>
        
         <tr>
        <td><input type="submit" name="submit" value="Insert"></td>
        </tr>
        
    </table>
</form>
</body>
</html>