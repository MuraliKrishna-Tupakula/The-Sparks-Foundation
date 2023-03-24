// Get the buttons
const paypalBtn = document.getElementById("paypal-btn");
const creditCardBtn = document.getElementById("credit-card-btn");
const debitCardBtn = document.getElementById("debit-card-btn");

// Add an event listener for the PayPal button click
paypalBtn.addEventListener("click", function() {
  // Redirect to the PayPal payment page
  window.location.href = "paypalform.php";
});

// Add an event listener for the credit card button click
creditCardBtn.addEventListener("click", function() {
  // Redirect to the credit card payment page
  window.location.href = "creditcard.php";
});

// Add an event listener for the debit card button click
debitCardBtn.addEventListener("click", function() {
  // Redirect to the debit card payment page
  window.location.href = "upipage.php";
});
