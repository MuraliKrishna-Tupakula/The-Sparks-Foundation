<!DOCTYPE html>
<html>
  <head>
    <title>Pay using UPI</title>
	<style>
    header {
    background-color: #ff8c00;
    color: #630ddc;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    font-size: medium;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  }
  
  header h1 {
    font-size: 24px;
    margin: 0;
  }
  
  header nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }
  
  header li {
    margin: 0 10px;
  }
  
  header a {
    color: #2f1616;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    transition: all 0.3s ease;
  }
  
  header a:hover {
    background-color: #b9ee0b;
    color: #ff8c00;
  }
#footer {
	
    background-color: #1a1a1a;
    color: #fff;
    padding: 50px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  #footer h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  
  #payment-options ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
  }
  
  #payment-options li {
    margin-right: 20px;
  }
  
  #payment-options img {
    width: 50px;
    height: 50px;
  }
  
  #contact-info p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 10px;
  }
  
  #social-media ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
  }
  
  #social-media li {
    margin-right: 20px;
  }
  
  #social-media a {
    color: #db0b0b;
    font-size: 24px;
  }
  
  #social-media a:hover {
    color: #007bff;
  }

  #footer-text p {
    font-size: 16px;
    margin: 0;
  }
  

		body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
  color: #333;
  padding-top: 80px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

h1 {
  font-size: 36px;
  text-align: center;
  margin-top: 0;
}

form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-size: 16px;
}

input[type="text"],
input[type="number"],
input[type="text"]:focus,
input[type="number"]:focus {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  transition: all 0.3s ease-in-out;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

	</style>
  </head>
  <body>
<?php
if(!empty($_POST["send"])) {
	$Payment = $_POST["payer-amount"];
  	$userEmail = $_POST["payer-email"];
	$Name=$_POST["payer-name"];
	$toEmail = $userEmail;
  
	$mailHeaders = "Name: " . $Name .
	"\r\n Email: ". $userEmail  . 
	"\r\n PaidAmount: ". $Payment  . 
	 "\r\n";

	if(mail($toEmail, $Name, $mailHeaders)) {
	    $message = "Your payment information is received successfully.";
	}
}
?>
    <header>
      <h1><i>PaymentGateway</i></h1>
      <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#about-us">About</a></li>
        <li><a href="paymainpage.php">PaymentType</a></li>
        <li><a href="index.php#contact-us">Contact</a></li>
        </ul>
      </nav>
      </header>
  
  
    <div class="container">
      <h1>Pay using UPI</h1>
      <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="payer-name" required>
        <br>
	  <label for="email">Email:</label>
        <input type="text" id="email" name="payer-email"  required><br>
        <label for="upi-id">UPI ID:</label>
        <input type="text" id="upi-id" name="upi-id" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="payer-amount" min="1" step="0.01" required>
        <br>
        <input type="submit" name="send" value="Pay Now">
      </form>
      <?php if (! empty($message)) {?>
        <div class='success'>
          <strong><?php echo $message; ?>	</strong>
        </div>
        <?php } ?>
    </div>
    <?php
		if(!empty($message)){
		 echo "<script>  setTimeout(function () {    
        window.location.href = 'index.php'; 
    },5000); </script>";
        }?>
    <br><br>
    
    <footer id="footer">
      <div id="payment-options">
        <h3>Payment Options</h3>
        <ul>
        <li><img src="visa.png" alt="Visa"></li>
        <li><img src="mastercard.png" alt="Mastercard"></li>
        <li><img src="paypal.png" alt="PayPal"></li>
        </ul>
      </div>
      <div id="contact-info">
        <h3>Contact Information</h3>
        <p>123 Main St, Suite 100<br>Anytown, USA 12345</p>
        <p>Email: info@paymentgatewayintegration.com<br>Phone: 555-1234</p>
        
      </div>
      <div id="social-media">
        <h3>Connect With Us</h3>
        <ul>
        <li><a href="https://facebook.com/in/"><img src="facebook1.png"></a></li>
        <li><a href="https://twitter.com/in/"><img src="twitter.png"></a></li>
        <li><a href="https://linkedin.com/in/"><img src="linkedin1.png"></a></li>
        <li><a href="https://instagram.com/"><img src="instagram1.png"></a></li>
        </ul>
      </div>
      <div id="footer-text">
        <p>&copy; 2023 Payment Gateway Integration. All rights reserved
        <br>The Sparks Foundation &copy; Murali Krishna Tupakula </p>
      </div>
      </footer>
	
  </body>
</html>
