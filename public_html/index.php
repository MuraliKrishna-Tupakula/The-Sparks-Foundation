<!DOCTYPE html>
<html lang="en">
<head>
    <title>PGI|PaymentGatewayIntegration</title>
<link rel="stylesheet" href="Home1.css">
</head
<body>

<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
	$userMessage=$_POST["userMessage"];
	$toEmail = "tupakulamuralikrishna530@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

 <header>
    <h1><i>PaymentGateway</i></h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about-us">About</a></li>
        <li><a href="#contact-us">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <section class="hero">
    <div class="hero-content">
        <h2><i>Payment Gateway Integration</i></h2>
      <h3>Help us make a difference</h3><br>
      <p>The customer is very important, the customer will be followed by the customer. It's great to watch out for trucks. Duis rutrum velit not just vulputate, 
        and tincidunt ligula malesuada.</p>
        <br>
      <button class="donate-btn"  id="donate-btn">Donate Now</button>
      
    </div>
  </section>

  <section id="about-us">
    <h2 >About Us</h2>
    <p>Welcome to our company! We are a team of dedicated professionals who are passionate about providing top-notch services to our clients. Our mission is to help businesses thrive by providing them with the tools and expertise they need to succeed.</p>
    <div id="payment-gateway">
      <h3>Payment Gateway Integration</h3>
      <p>We offer end-to-end payment gateway integration solutions, from initial setup and configuration to ongoing support and maintenance. Our goal is to make the process as seamless and hassle-free as possible for our clients, so they can focus on what they do best: running their business.</p>
      
    </div>
  </section>

  <section id="contact-us">
    <h2>Contact Us</h2>
    <form id="contact-form"  method="post">
      <div>
        <label for="name">Name</label>
        <input type="text" id="userName" name="userName" required>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="userEmail" name="userEmail" required>
      </div>
      <div>
        <label for="message">Message</label>
        <textarea id="userMessage" name="userMessage" required></textarea>
      </div>
      <button  type="submit" name="send" value="send">Send Message</button>
      
    </form>
    <?php if (! empty($message)) {?>
    <div class='success'>
      <strong><?php echo $message; ?>	</strong>
    </div>
    <?php } ?>
  </section>
  
    
  
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
  
  
  <!-- <div class="hero-content">
     Rest of your content goes here
    <button class="donate-btn">Donate Now</button>
  </div> -->
</body>
<script src="script1.js"> </script>
  </html>