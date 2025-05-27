<!DOCTYPE htlm>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro1</title>
    <!--fav icons-->
    <link rel="icon" href="image\logo.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    


    <!-- JS -->
    <script src="js/bootstrap.js"></script>

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!---Font awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<script src="https://kit.fontawesome.com/a7612e0a07.js" crossorigin="anonymous"></script>

    <!-- ********* Header *********-->

<!-- Navigator bar -->

    <div class="container-fluid bg-dark position-relative shadow ">
             <nav class="navbar navbar-expand-lg navbar-dark py-5 py-lg-0 px-0  px-lg-5">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between"  id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0 text-left">
                    <a href="index.php"  class="nav-item nav-link "><i class="fa-solid fa-house"></i>HOME </a>
                    <a href="about.php"  class="nav-item nav-link "><i class="fa-solid fa-address-card"></i> ABOUT US </a>
                    <a href="bestsallers.php" class="nav-item nav-link "><i class="fa-solid fa-chess-board"></i> Best Sellers </a>
                    <a href="amount.php"  class="nav-item nav-link"> <i class="fa-solid fa-comments-dollar"></i> Amount </a>
                    <a href="contact.php"  class="nav-item nav-link active"><i class="fa-regular fa-id-badge"></i> Contact </a>
                </div>
            </div>
            </nav>

        </div>
        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form with map</title>
  <link rel=
"stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity=
"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
    crossorigin="anonymous">
  <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity=
"sha512-jKX8EOtiVrylMIEk2nRkf5KowSF8+AJslPduL+oV4FqnyxSQxL0t4rKOeKKvntPtskFi1q6hBld6HzfdjZlnfA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="p-4 bg-white border rounded">
          <!--<h1 class="text-center text-success">GeeksforGeeks</h1>-->
          <h2 class="text-center">Contact Us</h2>
          <form>
            <div class="form-group">
              <label for="fullName">
                <i class="fa fa-user"></i> Full Name:
              </label>
              <input type="text" class="form-control"
                id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
              <label for="email">
                <i class="fa fa-envelope"></i> Email Address:
              </label>
              <input type="email" class="form-control"
                id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="mobile">
                <i class="fa fa-phone"></i> Contact No:
              </label>
              <input type="tel" class="form-control"
                id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
              <label for="msg">
                <i class="fa fa-comment"></i> Write Message:
              </label>
              <textarea class="form-control" id="msg"
                  name="msg" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 bg-secondary text-white rounded">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item"
              src=
"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1602802684192!2d77.39638073968018!3d28.504825075835775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce626851f7009%3A0x621185133cfd1ad1!2sGeeksforGeeks%20%7C%20Coding%20Classes!5e0!3m2!1sen!2sin!4v1702963476861!5m2!1sen!2sin"
              allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<!-- *************Footer***************-->
<?php include ("footer.php");?>
</body>
</html>