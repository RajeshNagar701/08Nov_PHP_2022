<html>
<head>
</head>
<body>

<?php
/*
Loop in php :4 type 
  

while(cond)    
{
	
}

do{
	
}while(cond) 

for(ini;cond;$i++)
{
	
}
	
foreach()
{
	
}
*/

// While()

/*

$i=50;
while($i>=100)
{
	echo $i."<br>";
	$i++;
}
*/
//do while

$i=1;
do
{
	echo $i."<br>";
	$i++;
	
}while($i>=10);



/*
for($i=50;$i<=100;$i++)
{
	echo $i."<br>";
}
*/


// break



for($a=1;$a<=10;$a++)
{
	if($a==6)
	{
		break;
	}
    echo $a."<br>";		
}

// continue
for($a=1;$a<=10;$a++)
{
	if($a==7)
	{
		continue;  // skip loop
	} 
	if($a==9)
	{
		continue;  // skip loop
	} 
    echo $a."<br>";		
}





?>
</body>
</html>