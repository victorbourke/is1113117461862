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
      
      <img src="/logoyup.png" alt="logo" class"logo">
      
      <h1 class="logo"></h1>
      
      <nav>
        
        <ul>
          <li><a href="/homepage.html">Home</a></li>
          <li><a href="/cv_page1.html">CV</a></li>
          <li><a href="/Interests/sports.html">Interest</a></li>
          <li><a href="/ebuisness/Ebus1.php">EBuisness</a></li>
        </ul>
      </nav>
      
    </div>
    
  </header>
  
        
        
        
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>