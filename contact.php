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
                    <a href="amount.php"  class="nav-item nav-link"> <i class="fa-brands fa-aws"></i>Amount </a>
                    <a href="contact.php"  class="nav-item nav-link active"><i class="fa-regular fa-id-badge"></i> Contact </a>
                </div>
            </div>
            </nav>

        </div>

         <!-- *************Footer***************-->

<?php include ("footer.php");?>

</body>
</html>