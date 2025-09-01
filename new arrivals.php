<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Unique Boutique New Arrivals</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background: #f5f5f5;
      font-family: 'Helvetica Neue', sans-serif;
    }
    .new-arrivals-section {
      padding: 60px 0;
    }
    .arrival-row {
      margin-bottom: 60px;
    }
    .arrival-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    .arrival-text {
      padding: 30px;
    }
    .arrival-text h3 {
      font-weight: 700;
      font-size: 1.75rem;
      margin-bottom: 15px;
    }
    .arrival-text p {
      font-size: 1rem;
      color: #555;
    }
    .arrival-text .price {
      font-size: 1.2rem;
      color: #b33939;
      font-weight: bold;
      margin: 15px 0;
    }
    .btn-shop {
      background-color: #111;
      color: white;
      border: none;
      padding: 10px 25px;
    }
    .btn-shop:hover {
      background-color: #000;
    }
  </style>
</head>
<body>

<div class="container new-arrivals-section">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">🌿 New Boutique Arrivals</h2>
    <p class="text-muted">Curated just for you – crafted with care, style, and passion.</p>
  </div>

  <!-- Product 1 -->
  <div class="row align-items-center arrival-row">
    <div class="col-md-6">
      <img class="flip-front img-fluid" w="50" h="30" src="image/da8915e383f15ed39fe72cbb9eb4816c.jpg" alt="fnt";>
      <!--<img src="https://via.placeholder.com/600x400?text=Linen+Dress" alt="Dress" class="arrival-img">-->
    </div>
    <div class="col-md-6 arrival-text">
      <h3>Handcrafted Linen Dress</h3>
      <p>Breezy, breathable, and made with love. Perfect for warm evenings and strolls through the market.</p>
      <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>115.00</div>
      <button class="btn btn-shop">Add to Cart</button>
            <button class="btn btn-shop">Buy Now</button>
    </div>
  </div>

  <!-- Product 2 -->
  <div class="row align-items-center flex-md-row-reverse arrival-row">
    <div class="col-md-6">
      <img class="flip-front img-fluid" w="50" h="30" src="image/da8915e383f15ed39fe72cbb9eb4816c.jpg" alt="fnt";>
      <!--<img src="https://via.placeholder.com/600x400?text=Artisan+Leather+Bag" alt="Bag" class="arrival-img">-->
    </div>
    <div class="col-md-6 arrival-text">
      <h3>Artisan Leather Crossbody</h3>
      <p>Crafted by skilled hands, this timeless piece adds character to every outfit.</p>
      <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>195.00</div>
      <button class="btn btn-shop">Add to Cart</button>
            <button class="btn btn-shop">Buy Now</button>
    </div>
  </div>

  <!-- Product 3 -->
  <div class="row align-items-center arrival-row">
    <div class="col-md-6">
      <img src="image/da8915e383f15ed39fe72cbb9eb4816c.jpg" alt="Earrings" class="arrival-img">
    </div>
    <div class="col-md-6 arrival-text">
      <h3>Natural Gem Earrings</h3>
      <p>Earthy elegance in every detail. Lightweight and radiant—designed to stand out gently.</p>
      <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>45.00</div>
      <button class="btn btn-shop">Add to Cart</button>
            <button class="btn btn-shop">Buy Now</button>
    </div>
  </div>

</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>









