<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Enter Details</title><!--jQuery-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="ebus2_validator.js" type="text/javascript">
	</script>
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
	     
	     header {
	       background: #ffffff;
	     }
	     
	     header::after {
	       content: '';
	       display: table;
	       clear: both;
	     }
	     
	      .logo {
	       float: left;
	       padding-top: 10px;
	     }
	     
	     nav {
	       float: right;
	     }
	     
	     nav ul {
	       margin: 0;
	       padding: 0;
	       list-style: none;
	     }
	     
	     nav li {
	       display: inline-block;
	       margin-left: 70px;
	       padding-top: 23px;
	     
	       position: relative;
	     }
	     
	     nav a {
	       color: #2F2FA2;
	       text-decoration: none;
	       text-transform: uppercase;
	       font-size: 17px;
	     }
	     
	     nav a:hover {
	       color: #2F2FA2;
	     }
	     
	     nav a::before {
	       content: '';
	       display: block;
	       height: 5px;
	       background-color: #2F2FA2;
	     
	       position: absolute;
	       top: 0;
	       width: 0%;
	     
	       transition: all ease-in-out 250ms;
	     }
	     
	     nav a:hover::before {
	       width: 100%;
	     }
	     
	</style>

	<header>
		<div class="container">
			<img alt="logo" src="/Pictures/logoyup.png">

			<h1 class="logo">
			</h1>


			<nav>
				<ul>
					<li>
						<a href="/homepage.html">Home</a>
					</li>


					<li>
						<a href="https://www.salesforce.com/company/about-us/" target="_blank">Salesforce</a>
					</li>


					<li>
						<a href="https://aws.amazon.com/cloud9/" target="_blank">Cloud9</a>
					</li>


					<li>
						<a href="https://aws.amazon.com/" target="_blank">AWS</a>
					</li>


					<li>
						<a href="https://www.google.com/gmail/about/" target="_blank">Gmail</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>


	<div class="textcenter">
		<h4>Please enter your payment details</h4>


		<form action="Ebus3.php" method="post">
			<label for="user_card">Card No.</label> <input id="user_card" maxlength="16" placeholder="Card Number" type="password"><br>
			<label for="user_pin">PIN</label> <input id="user_pin" maxlength="4" placeholder="Card PIN" type="password"><br>
			<br>
			<button disabled id="btnPurchase" type="submit">Proceed with Purchase</button>
		</form>
		<br>
		<button onclick="validateDetails()">Validate</button> <?php
		            // Set session variables
		            $_SESSION["user_name"] = $_POST["user_name"];
		            $_SESSION["user_email"] = $_POST["user_email"];
		            $_SESSION["total"] = $_POST["total"];
		            ?>
	</div>
</body>
</html>