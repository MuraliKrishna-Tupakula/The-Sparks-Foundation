<!DOCTYPE html>
<html>
<head>
	<title>Credit Payment</title>
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
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			padding-top: 80px;
}

		.container {
			width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		h1 {
			text-align: center;
			margin-top: 0;
			color: #009cde;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}

		label {
			margin-top: 10px;
			display: block;
			font-weight: bold;
			color: #333;
		}

		input[type="text"],
		input[type="email"],
		input[type="tel"],
		select {
			padding: 10px;
			border: none;
			border-radius: 5px;
			width: 100%;
			margin-top: 5px;
		}

		input[type="submit"] {
			margin-top: 20px;
			padding: 10px 20px;
			border: none;
			background-color: #009cde;
			color: #fff;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #0077b3;
		}

		.payment-amount {
			display: flex;
			align-items: center;
		}

		.currency {
			font-size: 20px;
			margin-right: 10px;
			color: #333;
		}

		.credit-card-details {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			margin-top: 20px;
		}

		.credit-card-inputs {
			display: flex;
			flex-wrap: wrap;
		}

		.credit-card-inputs input {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-top: 5px;
			margin-right: 5px;
		}

		.card-number,
		.cvv {
			flex-basis: 70%;
		}

		.exp-date {
			flex-basis: 25%;
		}

		.card-number input,
		.cvv input {
			width: 100%;
		}

		.card-type {
			margin-top: 10px;
			font-size: 14px;
			color: #333;
		}

		.card-type img {
			height: 30px;
			margin-right: 10px;
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
		<h1><i>PGI|Credit Card</i></h1>
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
		<h1>Pay with Credit Card</h1>

		<form action="" method="post">
 		 <label for="name">Name on Card:</label>
  		<input type="text" id="payer-name" name="payer-name" placeholder="Full Name">
          <label for="email">Email:</label>
          <input type="email" id="payer-email" name="payer-email" placeholder="example@gmail.com" required>
      
          <label for="amount">Amount:</label>
          <select id="payer-amount" name="payer-amount" required>
            <option value="">--Select an amount--</option>
            <option value="10">Rs.1000</option>
            <option value="20">Rs.2000</option>
            <option value="50">Rs.5000</option>
            <option value="100">Rs.10000</option>
		<option value="100">Rs.50000</option>
		<option value="100">Rs.1Lakh</option>
		<option value="100">Rs.5Lakh</option>
          </select>
  		<label for="cardnumber">Card Number:</label>
  		<input type="text" id="cardnumber" name="cardnumber" placeholder="XXXX-XXXX-XXXX-XXXX">

 		 <label for="expiry">Expiry Date:</label>
  		<input type="text" id="expiry" name="expiry" placeholder="MM/YY">

 		 <label for="cvv">CVV:</label>
  	<input type="text" id="cvv" name="cvv" placeholder="XXX">

 	 <button type="submit" name="send">Pay Now</button>
 	 
      </form>
	<?php if (! empty($message)) {?>
			<div class='success'>
			  <strong><?php echo $message; ?>	</strong>
			</div>
			<?php } ?>
	</div>
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














