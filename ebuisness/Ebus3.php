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
      	background-image: url("/Receipt.jpg");
      	background-repeat: no-repeat;
        background-size: auto;
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
      </style>
        <div class="textcenter"
        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo 
        
        $_POST["user_name"] ;
        
        $_POST["user_email"];
        
        "Total is " . $_SESSION["total"] . ".";
        ?>
        </div>
    </body>
</html>