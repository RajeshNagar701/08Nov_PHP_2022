<?php

/*
Cookies are small text files loaded from a server to a client computer storing some 
information regarding the client computer, so that when the same page from the server is 
visited by the user, necessary information can be collected from the cookie itself, 
decreasing the latency to open the page

*/




		// name    value        time for val
setcookie('user',"Cookie",time()+15);   // CREATE  365*24*60*60

//echo $_COOKIE['user'];    // USE/PRINT 

//setcookie('user',"cookie var",time()-15);   // DELETE
?>