
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shop Now - Online Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .product-card {
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
    }
    .product-card img {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }
    .card-body h5 {
      font-weight: 600;
    }
    .btn-shop {
      background-color: ;
      color: white;
      border-radius: 20px;
    }
    .btn-shop:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="text-center mb-5">Shop Now</h2>
  <div class="row">

    <!-- Product 1 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card">
        <img src="image/saree1.jpg" class="card-img-top" alt="Smartphone">
        <div class="card-body">
          <h5 class="card-title">Kanchipuram Sarees</h5>
          <p class="card-text text-success font-weight-bold">₹14,999</p>
          <form action="index3.php" method="get">
                                <button class="btn btn-primary btn-lg mt-2" type="submit">
                                    Add to Cart
                                </button>
                            </form>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card">
        <img src="image/Aeade.jpg" class="card-img-top" alt="Headphones">
        <div class="card-body">
          <h5 class="card-title">Fancy Sarees</h5>
          <p class="card-text text-success font-weight-bold">₹2,499</p>
        <form action="index3.php" method="get">
                                <button class="btn btn-primary btn-lg mt-2" type="submit">
                                    Add to Cart
                                </button>
                            </form>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4 mb-4">
      <div class="card product-card">
        <img src="image/saree3.jpg" class="card-img-top" alt="Smart Watch">
        <div class="card-body">
          <h5 class="card-title">Cotton Sarees</h5>
          <p class="card-text text-success font-weight-bold">₹3,999</p>
         <form action="index3.php" method="get">
                                <button class="btn btn-primary btn-lg mt-2" type="submit">
                                    Add to Cart
                                </button>
                            </form>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Bootstrap 4 JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


