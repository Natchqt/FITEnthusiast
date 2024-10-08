<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .payment-methods {
      margin-top: 20px;
    }
    .summary {
      margin-top: 40px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Choose Payment Method</h2>
    <div class="payment-methods">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod1" value="pay on counter" checked>
        <label class="form-check-label" for="paymentMethod1">
          Pay on Counter
        </label>
      </div>
      
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod2" value="creditcard">
        <label class="form-check-label" for="paymentMethod2">
          Credit Card
        </label>
      </div>
      
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod3" value="paypal">
        <label class="form-check-label" for="paymentMethod3">
          PayPal
        </label>
      </div>
    </div>

    <!-- Summary of selected plans -->
    <div class="summary mt-4 p-3 border border-light rounded bg-light">
      <h3 class="text-center">Summary of Selected Plans</h3>
      <ul class="list-group" id="selectedPlans">
        <!-- Plan items will be dynamically added here -->
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Premium Plan
          <span class="badge bg-primary rounded-pill">₱4,499</span>
        </li>
      </ul>
      <p class="text-end"><strong>Total:</strong> <span id="totalAmount" class="badge bg-secondary">₱4,499</span></p>
    </div>

    <div class="text-center">
      <button class="btn btn-primary mt-3" id="confirmPayment">Confirm Payment</button>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      var cartItems = JSON.parse(localStorage.getItem('cartItems'));

      // Display selected plans
      if (cartItems && cartItems.length > 0) {
        cartItems.forEach(function(item) {
          $('#selectedPlans').append('<li class="list-group-item">' + item.plan + ' - $' + item.fee + '</li>');
        });
      }

      // Handle Confirm Payment button click
      $('#confirmPayment').click(function() {
        var selectedMethod = $('input[name="paymentMethod"]:checked').val();

        if (selectedMethod) {
          alert('Redirecting to ' + selectedMethod + ' for payment...'); // Replace with actual payment logic
          // Implement redirection or payment processing logic here
        } else {
          alert('Please select a payment method.');
        }
      });
    });
  </script>
</body>
</html>
