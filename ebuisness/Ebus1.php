<!DOCTYPE html>

<html>
<head>
	<title>Select Product</title><!--jQuery-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="cost_calc.js" type="text/javascript">
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
		<h4>Select a Product</h4>
		<br>
			<label for="user_name">Name</label> <input id="user_name" name="user_name" placeholder="John Doe" type="name"><br>
			<br>
			<label for="user_pin">Email</label> <input id="user_email" name="user_email" placeholder="johndoe@mail.com" type="email"><br>
			<br>

		<form action="Ebus2.php" method="post">
			<label for="salesforce"><input checked id="salesforce" name="product" onclick="disablebtnProceed()" type="radio"> SalesForce @ $100</label><br>
			<label class="label2" for="cloud9"><input id="cloud9" name="product" onclick="disablebtnProceed()" type="radio"> Cloud9 @ $200</label><br>
			<label for="aws"><input id="aws" name="product" onclick="disablebtnProceed()" type="radio"> AWS @ $300</label><br>
			<label class="label4" for="gmail"><input id="gmail" name="product" onclick="disablebtnProceed()" type="radio"> Gmail @ $400</label><br>
			<!-- Breakdown of the price for the selected option -->
			 <label class="label5" for="subtotal">Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="subtotal" name="subtotal" type="text" value="0.00"></label><br>
			<label class="label6" for="discount">Discount @ 5% &nbsp;&nbsp;&nbsp; <input id="discount" name="discount" type="text" value="0.00"><br>
			(- Discount)</label><br>
			<label class="label7" for="vat">VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="vat" name="vat" type="text" value="0.00"></label><br>
			<label class="label8" for="total">Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="total" name="total" type="text" value="0.00"><br>
			(- Discount + VAT)</label><br>
			<button disabled id="btnProceed" type="submit">Add to Shopping Cart</button>
		</form>
		<br>
		<button onclick="calcSub()">Calculate Cost</button> <a href="Ebus1.php" role="button">Clear Choice</a>
	</div>
</body>
</html>