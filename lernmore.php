<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Collection Page</title>
    <!-- Bootstrap 4 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles (optional) -->
    <style>
        .product-card {
            margin-bottom: 30px;
        }
        .product-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .product-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .product-price {
            color: #28a745;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card">
                   <img src="" alt="Product 1" class="product-image card-img-top">
                    <div class="card-body">
                        <h5 class="product-title card-title">Product 1</h5>
                        <p class="card-text">A brief description of product 1. It has all the features you need!</p>
                        <p class="product-price">$29.99</p>
                         <form action="index3.php" method="get">
                                <button class="btn btn-primary btn-lg mt-2" type="submit">
                                    Add to Cart
                                </button>
                            </form>

                       <!-- <button class="btn btn-primary btn-block">Add to Cart</button>-->
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x200" alt="Product 2" class="product-image card-img-top">
                    <div class="card-body">
                        <h5 class="product-title card-title">Product 2</h5>
                        <p class="card-text">A brief description of product 2. Excellent quality and affordable price!</p>
                        <p class="product-price">$39.99</p>
                         <form action="index3.php" method="get">
                                <button class="btn btn-primary btn-lg mt-2" type="submit">
                                    Add to Cart
                                </button>
                            </form>

                       <!-- <button class="btn btn-primary btn-block">Add to Cart</button>-->
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x200" alt="Product 3" class="product-image card-img-top">
                    <div class="card-body">
                        <h5 class="product-title card-title">Product 3</h5>
                        <p class="card-text">A brief description of product 3. Perfect for your needs!</p>
                        <p class="product-price">$49.99</p>
                         <form action="index3.php" method="get">
                                <button class="btn btn-primary btn-lg mt-2" type="submit">
                                    Add to Cart
                                </button>
                            </form>

                       <!-- <button class="btn btn-primary btn-block">Add to Cart</button>-->
                    </div>
                </div>
            </div>

            <!-- Add more products here as needed -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Your Shop. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
