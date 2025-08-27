
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Review Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .star-rating {
      color: #f8d64e;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <!-- Product Info -->
  <div class="row">
    <div class="col-md-4">
      <img src="image/saree1.jpg" alt="Product Image" class="img-fluid">
    </div>
    <div class="col-md-8">
      <h2>Product Name</h2>
      <p class="text-muted">Category: Saree's</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet tortor vitae sapien fringilla hendrerit.</p>
      <h4><i class="fa-solid fa-indian-rupee-sign"></i>49.99</h4>
      <div>
        <span class="star-rating">★★★★☆</span>
        <small>(128 reviews)</small>
      </div>
    </div>
  </div>

  <hr>

  <!-- Reviews -->
  <div class="row mt-4">
    <div class="col-md-6">
      <h4>Product Highlights</h4>
      <div class="media mb-3">
      <!--  <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User">-->
        <div class="media-body">
          <h5></h5>
          <span class="star-rating">★★★★★</span>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>

      <div class="media mb-3">
       <!-- <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User">-->
        <div class="media-body">
          <h5>Product Details</h5>
          <span class="star-rating">★★★☆☆</span>
          <p>Pattern</p>
        </div>
      </div>
    </div>

    <!-- Submit Review Form -->
    <!--<div class="col-md-6">
      <h4>Write a Review</h4>
      <form>
        <div class="form-group">
          <label for="reviewerName">Your Name</label>
          <input type="text" class="form-control" id="reviewerName" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="reviewRating">Rating</label>
          <select class="form-control" id="reviewRating">
            <option>★★★★★</option>
            <option>★★★★☆</option>
            <option>★★★☆☆</option>
            <option>★★☆☆☆</option>
            <option>★☆☆☆☆</option>
          </select>
        </div>
        <div class="form-group">
          <label for="reviewText">Review</label>
          <textarea class="form-control" id="reviewText" rows="3" placeholder="Write your review here..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
      </form>
    </div>
  </div>
</div>-->

<!-- Bootstrap JS (Optional for some components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>