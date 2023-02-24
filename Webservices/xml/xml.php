

<!--
 what is XML & use of example with example ?
Xml (eXtensible Markup Language) is a markup language.
XML is designed to store and transport data.
Xml was released in late 90’s. it was created to provide an easy to use and store self describing data.
XML became a W3C Recommendation on February 10, 1998.
XML is not a replacement for HTML.
XML is designed to be self-descriptive.
XML is designed to carry data, not to display data.
XML tags are not predefined. You must define your own tags.
XML is platform independent and language independent.
Platform Independent and Language Independent: The main benefit of xml is that you can use it to take data from a program like Microsoft SQL, convert it into XML then share that XML with other programs and platforms. You can communicate between two platforms which are generally very difficult.

The main thing which makes XML truly powerful is its international acceptance. Many corporation use XML interfaces for databases, programming, office application mobile phones and more. It is due to its platform independent feature.

<?xml version="1.0" encoding="UTF-8"?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note>


The Difference Between XML and HTML

XML and HTML were designed with different goals:
XML was designed to carry data - with focus on what data is
HTML was designed to display data - with focus on how data looks
XML tags are not predefined like HTML tags are

-->


<?php




$conn=new mysqli('localhost','root','','pharmacy');
$se="select *from country";
$res=$conn->query($se);



$myFile = "country.xml";
// create file
$file = fopen($myFile, 'w');

$xmltag = '<?xml version="1.0" encoding="utf-8"?>';
$xmltag .= '<country>';


while($x=$res->fetch_object())
{
	
	$xmltag .= '<cid>' . $x->cid .'</cid>';
	$xmltag .= '<cnm>'.$x->cnm.'</cnm>';
	
}
$xmltag .= '</country>';


//write
fwrite($file, $xmltag);
fclose($file);

// read

$myFile = "country.xml";
$file = fopen($myFile,'r');
echo fread($file,filesize($myFile));
fclose($file);
?>