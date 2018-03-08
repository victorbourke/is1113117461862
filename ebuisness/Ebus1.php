<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

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
      
      <img src="/Pictures/logoyup.png" alt="logo" class"logo">
      
      <h1 class="logo"></h1>
      
      <nav>
        
        <ul>
          <li><a href="/homepage.html">Home</a></li>
          <li><a href="https://www.salesforce.com/company/about-us/" target="_blank">Salesforce</a></li>
          <li><a href="https://aws.amazon.com/cloud9/" target="_blank">Cloud9</a></li>
          <li><a href="https://aws.amazon.com/" target="_blank">AWS</a></li>
          <li><a href="https://www.google.com/gmail/about/" target="_blank">Gmail</a></li>
        </ul>
      </nav>
      
    </div>
    
  </header>
  
        
        
        <div class="textcenter">
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
            <br>
            
            <label for="cloud9" class="label2">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              
              <label for="gmail" class="label4">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
              </label>
              
              <br/>
              
            <!-- Breakdown of the price for the selected option -->
            <label for="subtotal" class="label5">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="label6">
              Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
              <br>
              (- Discount)
            </label>
                
            <br>
            
            <label for="vat" class="label7">
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="label8">
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
              (- Discount + VAT)
            </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    </div>
    </body>
</html>