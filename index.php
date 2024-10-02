<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FITEnthusiast</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="styles\index.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">FITEnthusiast</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#trainers">Trainers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#plans">Plans</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap 5 Scripts (Make sure you include Bootstrap 5 JS and CSS files) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


  <!-- Home Section -->
  

 <!-- About Us Section -->
 <section id="about" class="about-section py-5 bg-light text-dark">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-lg-6">
        <h2 class="mb-4 text-uppercase font-weight-bold">About <span class="text-primary">FITEnthusiast</span></h2>
        <p class="lead font-weight-normal">
          Welcome to FITEnthusiast, your go-to platform for achieving your fitness goals. 
          We offer a wide range of fitness classes and personal training sessions designed 
          to cater to all fitness levels. Our certified trainers are dedicated to guiding 
          and motivating you every step of the way.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-check-circle-fill text-primary"></i> <span class="font-weight-bold">Customized fitness plans</span></li>
          <li><i class="bi bi-check-circle-fill text-primary"></i> <span class="font-weight-bold">Group and personal training</span></li>
          <li><i class="bi bi-check-circle-fill text-primary"></i> <span class="font-weight-bold">State-of-the-art equipment</span></li>
        </ul>
        <a href="#plans" class="btn btn-primary mt-4">Explore Our Plans</a>
      </div>
      
      <!-- Image Content -->
      <div class="col-lg-6 text-center">
        <img src="styles/gym.jpg" class="img-fluid rounded shadow-lg" alt="About Us" style="max-width: 90%;">
      </div>
    </div>
  </div>
</section>



<!-- Bootstrap Icons (for check icons) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<!-- Trainers Section -->
 <section id="trainers" class="container my-5">
    <h2 class="text-center mb-4">Our Trainers</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card trainer-card">
          <img loading="lazy" src="https://th.bing.com/th/id/R.03f9ed58ecd9ad70b46095d568957b01?rik=%2fZ%2fyJPr5y1jf8g&pid=ImgRaw&r=0" alt="Trainer 1">
          <div class="card-body text-center">
            <h5 class="card-title">Name : Joseph</h5>
            <p class="card-text">Certified Personal Trainer</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card trainer-card">
          <img loading="lazy" src="https://th.bing.com/th/id/R.7e063fe3f8c066424282466fa622751a?rik=deGl4EVHEgei0A&pid=ImgRaw&r=0" alt="Trainer 2">
          <div class="card-body text-center">
            <h5 class="card-title">Name : Ahmed</h5>
            <p class="card-text">Fitness Instructor</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div  class="card trainer-card">
          <img loading="lazy" src="https://www.attainbyaetna.com/content/dam/aetna/images/apollo/amir_headshot.jpg" alt="Trainer 3">
          <div class="card-body text-center">
            <h5 class="card-title">Name : Joe</h5>
            <p class="card-text">Yoga Specialist</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Plan Section -->
<section id="plans" class="plan-section">
  <h2>Choose a Plan</h2>
  <div class="container">
    <div class="row">
    <div class="col-md-4 mb-4">
  <div class="card plan-card shadow-lg border-0">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center font-weight-bold mb-3">Basic Plan</h5>
      <p class="card-text text-center">
        <span class="display-4 text-primary font-weight-bold">₱1,699</span><small>/month</small>
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Access to gym facilities</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free group classes (2 per week)</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 1 personal training session per month</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Locker and shower room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 5% discount on merchandise</li>
      </ul>
      <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg add-to-cart" data-plan="Basic Plan" data-fee="1699">Add Basic Plan</button>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 mb-4">
  <div class="card plan-card shadow-lg border-0">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center font-weight-bold mb-3">Standard Plan</h5>
      <p class="card-text text-center">
        <span class="display-4 text-primary font-weight-bold">₱2,799</span><small>/month</small>
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Unlimited access to gym facilities</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free group classes (4 per week)</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 2 personal training sessions per month</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Locker and shower room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free sauna and steam room access</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 10% discount on merchandise</li>
      </ul>
      <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg add-to-cart" data-plan="Standard Plan" data-fee="2799">Add Standard Plan</button>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 mb-4">
  <div class="card plan-card shadow-lg border-0">
    <div class="card-body">
      <h5 class="card-title text-uppercase text-center font-weight-bold mb-3">Premium Plan</h5>
      <p class="card-text text-center">
        <span class="display-4 text-primary font-weight-bold">₱4,499</span><small>/month</small>
      </p>
      <ul class="list-unstyled mt-4">
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 24/7 access to gym facilities</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Unlimited group classes</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 4 personal training sessions per month</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Access to locker, shower, sauna, and steam rooms</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free monthly nutritional consultations</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> 20% discount on fitness gear and merchandise</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Free premium events & workshops</li>
        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> VIP lounge access</li>
      </ul>
      <div class="text-center mt-4">
        <button class="btn btn-outline-primary btn-lg add-to-cart" data-plan="Premium Plan" data-fee="4499">Add Premium Plan</button>
      </div>
    </div>
  </div>
</div>



  <!-- Basket Icon and Plan Cart Section -->
  <div class="cart-section mt-5 p-4 shadow-lg border-0">
  <h3 class="text-uppercase text-center font-weight-bold mb-4">Your Selected Plan</h3>
  <ul class="list-group list-group-flush" id="cartItems">
    <!-- Plan Cart items will be dynamically added here -->
  </ul>

  <div class="d-flex justify-content-between align-items-center mt-4">
    <p class="mb-0"><strong>Total:</strong> <span id="totalAmount" class="text-primary font-weight-bold">₱0</span></p>
  </div>

  <div class="text-center mt-5">
    <button class="btn btn-outline-danger btn-lg me-2" id="clearCart">
      <i class="bi bi-x-circle"></i> Delete Plan
    </button>
    <button class="btn btn-outline-success btn-lg" id="checkout">
      <i class="bi bi-cart-check"></i> Checkout
    </button>
  </div>
</div>

<script>
    $(document).ready(function() {
      var cartItems = []; // Initialize cart items array

      // Function to update cart display
      function updateCartDisplay() {
        $('#cartItems').empty();
        var total = 0;

        cartItems.forEach(function(item) {
          $('#cartItems').append('<li class="list-group-item">' + item.plan + ' - ₱' + item.fee + '</li>');
          total += item.fee;
        });

        $('#totalAmount').text('₱' + total); // Update total amount display
      }

      // Add to Cart button click event handler
      $('.add-to-cart').click(function() {
        var plan = $(this).data('plan');
        var fee = $(this).data('fee');

        // Check if the plan is already in cart
        var alreadyInCart = cartItems.some(item => item.plan === plan);

        if (!alreadyInCart) {
          // Add plan to cart
          cartItems.push({ plan: plan, fee: fee });

          // Update cart display
          updateCartDisplay();
        } else {
          alert('This plan is already in your cart.');
        }
      });

      // Clear Cart button click event handler
      $('#clearCart').click(function() {
        cartItems = []; // Clear cart items array
        updateCartDisplay(); // Update cart display
      });

      // Save Cart button click event handler
      $('#save').click(function() {
        // AJAX request to save cart items
        $.ajax({
          url: 'save_cart.php',
          type: 'POST',
          data: { cartData: JSON.stringify(cartItems) },
          success: function(response) {
            if (response.success) {
              alert('Cart items saved successfully.');
            } else {
              alert('Error saving cart items. Please try again.');
            }
          },
          error: function(xhr, status, error) {
            alert('Error saving cart items: ' + error);
          }
        });
      });

      // Checkout button click event handler
      $('#checkout').click(function() {
        // Check if cart has items
        if (cartItems.length === 0) {
          alert('Your cart is empty. Please add items before checkout.');
          return;
        }

        // Redirect to checkout page
        window.location.href = 'checkout.php';
      });

      // Initial cart display update
      updateCartDisplay();
    });
  </script>


<footer id="contact" class="footer bg-light text-dark mt-5 py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase font-weight-bold">Contact Us</h5>
        <p><i class="bi bi-geo-alt-fill"></i> Location: 123 Gym Street, Dagupan City</p>
        <p><i class="bi bi-envelope-fill"></i> Email: <a href="mailto:fitenthusiast@gmail.com" class="text-dark">fitenthusiast@gmail.com</a></p>
        <p><i class="bi bi-telephone-fill"></i> Phone: <a href="tel:09876543211" class="text-dark">09876543211</a></p>
      </div>
      
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase font-weight-bold">Follow Us</h5>
        <div>
          <a href="#" class="text-dark me-3"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-github fa-lg"></i></a>
          <a href="#" class="text-dark"><i class="fab fa-linkedin fa-lg"></i></a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase font-weight-bold">Subscribe to Our Newsletter</h5>
        <form id="subscribeForm">
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email" required>
            <button class="btn btn-primary" type="submit">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>&copy; 2024 FITEnthusiast. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="login.php" id="loginForm">
          <div class="form-group">
            <label for="username">Email:</label>
            <input type="email" class="form-control" id="username" name="username" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary" id="togglePasswordLogin" onclick="togglePassword('password', this)">
                  <i class="fas fa-eye" id="eyeIconLogin"></i>
                </button>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <p class="mt-3 text-center">Don't have an account? <a href="#" data-toggle="modal" data-target="#registerModal">Register here</a></p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="register.php" id="registerForm">
          <div class="form-group">
            <label for="registerUsername">Username:</label>
            <input type="text" class="form-control" id="registerUsername" name="username" placeholder="Choose a username" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="registerPassword">Password:</label>
            <div class="input-group">
              <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Create a password" required>
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary" id="togglePasswordRegister" onclick="togglePassword('registerPassword', this)">
                  <i class="fas fa-eye" id="eyeIconRegister"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <div class="input-group">
              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword" onclick="togglePassword('confirmPassword', this)">
                  <i class="fas fa-eye" id="eyeIconConfirm"></i>
                </button>
              </div>
            </div>
            <small id="passwordHelp" class="form-text text-muted">Make sure to type the same password.</small>
          </div>
          <button type="submit" class="btn btn-success btn-block">Register</button>
          <p class="mt-3 text-center">Already have an account? <a href="#" data-toggle="modal" data-target="#loginModal">Login here</a></p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap and jQuery Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Toggle password visibility
  function togglePassword(inputId, btn) {
    const input = document.getElementById(inputId);
    const eyeIcon = btn.querySelector('i');
    if (input.type === 'password') {
      input.type = 'text';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    } else {
      input.type = 'password';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    }
  }

  // Handle login form submission
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Logged in successfully!');
    $('#loginModal').modal('hide');
  });

  // Handle register form submission
  document.getElementById('registerForm').addEventListener('submit', function(event) {
    // Password confirmation validation
    var password = document.getElementById('registerPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
      event.preventDefault(); // Prevent form submission
      alert("Passwords do not match. Please try again."); // Show error message
    } else {
      alert('Registered successfully!'); // Alert if registration is successful
      $('#registerModal').modal('hide'); // Hide registration modal
      $('#loginModal').modal('show'); // Show login modal
    }
  });
</script>



 
</body>
</html>