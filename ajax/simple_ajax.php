

<!--

Ajax stands for Asynchronous Javascript And Xml. 

Ajax is just a means of loading data from the server and selectively updating 
parts of a web page without reloading the whole page.

Basically, what Ajax does is make use of the browser's built-in 
XMLHttpRequest (XHR) object to send and receive information to and 
from a web server asynchronously, in the background, without blocking the page 
or interfering with the user's experience.

Ajax has become so popular that you hardly find an application that doesn't use Ajax 
to some extent. 

The example of some large-scale Ajax-driven online applications are: 
Gmail, 
Google Maps, 
Google Docs, 
YouTube, 
Facebook, 
Flickr, and so many other applications.
-->



<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
</head>

<body>

<h2>The XMLHttpRequest Object</h2>

<p id="demo"></p>

<button type="button" onclick="loadDoc()">Change Content</button>




<script>


//setTimeout(loadDoc, 5000);


function loadDoc() 
{
  var xhttp;
  if (window.XMLHttpRequest) // create object for request
  {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
  } 
  else 
  {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
//The readyState property holds the status of the XMLHttpRequest.

//The onreadystatechange property defines a function to be executed when the readyState changes.

//The status property and the statusText property holds the status of the XMLHttpRequest object.

/*  
readyState	Holds the status of the XMLHttpRequest.
0: request not initialized
1: server connection established
2: request received
3: processing request
4: request finished and response is ready

status	Returns the status-number of a request
200: "OK"
403: "Forbidden"
404: "Not Found"
*/

   xhttp.onreadystatechange = function() 
   {  
	   if(xhttp.readyState==4 || xhttp.status==200)
	   {
		   //The responseText property returns the server response as a JavaScript string, and you can use it accordingly:
		   document.getElementById("demo").innerHTML=this.responseText;
	   }
   }
//To send a request to a server, we use the open() and send() methods of the XMLHttpRequest object:
  xhttp.open("GET", "data.php", true);
  xhttp.send();
}



//===========================================================================================================
// Jquery ajax

/*
$(document).ready(function()
{
  $("button").click(function()
  {
    $.ajax({url: "data.php", success: function(response){
      $("#demo").html(response);
    }});
  });
});
*/


/*

 $(document).ready(function(){
  $("button").click(function(){
    $("#demo").load("data.php");
  });
});
*/





</script>


</body>
</html>
