<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>RECEIPT</title>
</head>

<body>
	<style>
	       
	     body {
	       margin: 0;
	       background: #ffffff;
	       font-family: 'Work Sans', sans-serif;
	       font-weight: 400;
	     }
	     
	     .textcenter {
	       margin: 0;
	       position: absolute;
	       top: 50%;
	       left: 50%;
	       margin-right: -50%;
	       transform: translate(-50%, -50%)
	     }
	     
	   .container {
	       width: 80%;
	       margin: 0 auto;
	     }
	     
	    .receipt {
	    	width: 80%;
	    	height: 80%;
	    } 
	</style>
	
	<center><img alt="Banner" src="/Receipt.jpg" class="receipt"></center>

	<div class="textcenter">
		<center><h4>RECEIPT</h4></center>
		<center>
		<?php
		        // Echo session variables that were set on previous page
		         
		        
		        echo $_SESSION["user_name"] ;
		        
		        echo $_SESSION["user_email"];
		        
		        echo "Total is " . $_SESSION["total"] . ".";
		        ?>
		 </center>       
	</div>
</body>
</html>