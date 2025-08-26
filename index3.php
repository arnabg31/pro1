 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delivery Page - Flipkart Style</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Order Now</a>
</nav>

<!-- Main Content -->
<div class="container mt-4">
  <div class="row">
    <!-- Left Column: Address and Delivery -->
    <div class="col-md-8">
      <!-- Delivery Address -->
      <div class="card mb-4">
        <div class="card-header bg-info text-white">Delivery Address</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea class="form-control" id="address" rows="3" placeholder="Flat, Street, Locality"></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city">
              </div>
              <div class="form-group col-md-4">
                <label for="state">State</label>
                <select id="state" class="form-control">
                  <option selected>Choose...</option>
                  <option>West Bengal</option>
                 <!-- <option>Karnataka</option>
                  <option>Tamil Nadu</option>-->
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="zip">PIN</label>
                <input type="text" class="form-control" id="zip">
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Delivery Options -->
      <div class="card mb-4">
        <div class="card-header bg-secondary text-white">Delivery Options</div>
        <div class="card-body">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="deliveryOption" id="standard" checked>
            <label class="form-check-label" for="standard">
              Standard Delivery - FREE (3-5 days)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="deliveryOption" id="express">
            <label class="form-check-label" for="express">
              Express Delivery - ₹50 (1-2 days)
            </label>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Order Summary -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-dark text-white">Order Summary</div>
        <div class="card-body">
          <h5 class="card-title">Product Name</h5>
          <p class="card-text">Cool Gadget X1 - ₹2,499</p>
          <hr>
          <p><strong>Delivery:</strong> ₹0</p>
          <h5>Total: ₹0</h5>
          <button class="btn btn-success btn-block mt-3">Proceed to Checkout</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap 4 JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>





