<html>
   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
  <script type = "text/javascript" language = "javascript">
	 $(document).ready(function() {
		
		$("#btn1").click(function(event){
		   $.post( "data.php",{ name: "Zara" },function(data) {$('#stage').html(data);});		
		});
			
	 });
  </script>
   </head>
	
   <body>
      <p>Click on the button to load result.html file −</p>
		
      <div id = "stage" style = "background-color:cc0;">
         STAGE
      </div>
		
      <input type = "button" id = "btn1" value = "Load Data" />
   </body>
</html>