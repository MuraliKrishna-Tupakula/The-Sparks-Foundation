// Get the buttons
const donateBtn = document.getElementById("donate-btn");


// Add an event listener for the debit card button click
donateBtn.addEventListener("click", function() {
  // Redirect to the payment main  page
  window.location.href = "paymainpage.php";
});
