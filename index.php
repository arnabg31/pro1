<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pro1</title>
    <!--fav icons-->
    <link rel="icon" href="image\logo1.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- JS -->
    <script src="js/bootstrap.js"></script>

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!---Font awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .img-hover-zoom {
        overflow: hidden;
    }

    .img-hover-zoom img {
        transition: transform 0.5s ease;
    }

    .img-hover-zoom:hover img {
        transform: scale(1.1);
    }
    </style>
    <script src="https://kit.fontawesome.com/a7612e0a07.js" crossorigin="anonymous"></script>


    <!-- ********* Header *********-->


    <!-- Navigator bar -->


    <nav class="navbar bg-light">

        <!--	<a class="navbar-brand" href=""><img alt="Free Frontend Logo" class="img-fluid" height="" src="https://freefrontend.dev/wp-content/uploads/free-frontend-logo.png" width="300"></a>-->
        </div>
        </div>
        <div class="d-flex align-items-center">
            <!--<a class="btn btn-primary d-none d-lg-block" href="https://freefrontend.dev/" target="_blank">Free Frontend</a>-->
            <a class="btn btn-primary d-lg-none" href="https://freefrontend.dev/" target="_blank"><svg
                    class="bi bi-list" fill="currentColor" height="20" viewbox="0 0 16 16" width="20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.5 12a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                    </path>
                </svg></a>
        </div>

        <div class="container-fluid d-flex justify-content-between align-items-center">

            <a class="navbar-brand" href="index.php"><img src="image\boutique-logo-design-template-free-vector.jpg"
                    alt="Logo" style="width: 90px; height: 80px;"></a>
            <div class="d-flex align-items-center">
                <h3 class="text-info">The Artisan Boutiqe</h3>
            </div>
            <div class="d-flex align-items-center">
                <p class="text-dark mb-0">Welcome to our website!</p>
            </div>
            <form class="d-lg-flex d-none align-items-center position-relative">
                <div class="input-group align-items-center">
                    <input aria-describedby="button-addon2" aria-label="Search" class="form-control"
                        placeholder="Search" type="text"> <button class="btn bg-white border" id="button-addon2"
                        type="button"><svg class="bi bi-search" fill="currentColor" height="20" viewbox="0 0 16 16"
                            width="20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg></button>
                </div>
            </form>
            <!-- Social Media Icons -->
            <div class="d-block">
                <div class="d-flex ms-auto">
                    <a class="text-dark border border-2 border-dark rounded-circle d-flex align-items-center justify-content-center"
                        href="" style="height:32px;width:32px;"><svg class="bi bi-facebook-f" fill="currentColor"
                            height="16" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                            </path>
                        </svg></a> <a
                        class="text-dark border border-2 border-dark rounded-circle d-flex align-items-center justify-content-center ms-2"
                        href="" style="height:32px;width:32px;"><svg class="bi bi-twitter" fill="currentColor"
                            height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></a> <a
                        class="text-dark border border-2 border-dark rounded-circle d-flex align-items-center justify-content-center ms-2"
                        href="" style="height:32px;width:32px;"><svg class="bi bi-instagram" fill="currentColor"
                            height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></a>

                </div>
            </div>
        </div>

    </nav>


    <div class="container-fluid bg-dark  position-relative shadow ">
        <nav class="navbar navbar-expand-lg navbar-dark py-5 py-lg-0 px-0  px-lg-5">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0 text-left">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house"></i>HOME </a>
                    <a href="about.php" class="nav-item nav-link"><i class="fa-solid fa-address-card"></i> ABOUT US </a>
                    <a href="bestsallers.php" class="nav-item nav-link "><i class="fa-solid fa-chess-board"></i> Best
                        Sallers </a>
                    <a href="amount.php" class="nav-item nav-link"> <i class="fa-solid fa-comments-dollar"></i> Amount
                    </a>
                    <a href="contact.php" class="nav-item nav-link"><i class="fa-regular fa-id-badge"></i> Contact </a>
                </div>
            </div>
        </nav>

    </div>
    </br>
    <!-- ********* Slider Image *********-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/ph.jpg" class="d-block w-100" alt="First Slide" style="height:300px; object-fit:cover;">
            </div>
            <div class="carousel-item">
                <img src="image/pic9.jpg" class="d-block w-100" alt="Second Slide"
                    style="height:300px; object-fit:cover;">
            </div>
            <div class="carousel-item">
                <img src="image/pic6.jpg" class="d-block w-100" alt="Third Slide"
                    style="height:300px; object-fit:cover;">
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ********* Collaction *********-->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-2 mb-lg-4">
                <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
                    <span class="text-muted">SHOW OUR SHOWROOM</span>
                    <h2 class="display-5 fw-bold">Meet the Team</h2>
                    <p class="lead">At Style, we specialize in designer sarees, custom-made blouses and other costumes,
                        and any sort of ceremonial ensemble for women and kids. At a glance, it is a boutique store with
                        a great collection of designer attire. The difference is that most of the clothes we make are
                        inspired by our nation’s rich heritage of art and craft. We blend these heritage-inspired
                        designs with the finest fabrics (such as Banaras silk and Kanchipuram silk) and shape them
                        according to the customer’s needs. Thanks to our exceptional team of designers, embroidery /
                        cutwork specialists and other supporting staff, the Anya creations have already succeeded in
                        setting a noble trend in the ceremonial.</p>
                </div>
            </div>

            <!-- Model Collection -->

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center mb-3">
                        <div class="card-body p-0 pb-4">
                          <div class="img-hover-zoom">
                            <div class="mb-4"><img class="img-fluid" src="image/wsaree.jpg"></div>
                            <h5 class="fw-bold">NEW ARRIVAL SAREE</h5>
                             <form action="shopnow (2).php" method="get" target="_blank">
                                 <button><div class="text-muted">
                                SHOP NOW
</button>
                                  <!--<form action="shop.php" method="get" target="_blank">
                                <button class="btn btn-primary btn-lg mt-4" type="submit">SHOP NOW</button>-->
                            </form>
                            
                            <div class="d-flex justify-content-center mt-4">
                                <a class="btn btn-sm me-2" href=""><svg class="bi bi-facebook" fill="currentColor"
                                        height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                        </path>
                                    </svg></a> <a class="btn btn-sm" href=""><svg class="bi bi-linkedin"
                                        fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body p-0 pb-4">
                      <div class="img-hover-zoom">
                        <div class="mb-4"><img class="img-fluid" src="image/kids.jpg"></div>
                        <h5 class="fw-bold">CHILDREN COLLECTION</h5>
                       <!-- <div class="text-muted">
                            BOOK NOW
                        </div>-->
                                                     <form action="shopnow (2).php" method="get" target="_blank">
                                 <button><div class="text-muted">
                                SHOP NOW
</button>
                                  <!--<form action="shop.php" method="get" target="_blank">
                                <button class="btn btn-primary btn-lg mt-4" type="submit">SHOP NOW</button>-->
                            </form>
                            
                        <div class="d-flex justify-content-center mt-4">
                            <a class="btn btn-sm me-2" href=""><svg class="bi bi-facebook" fill="currentColor"
                                    height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                    </path>
                                </svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter"
                                    fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                    </path>
                                </svg></a> <a class="btn btn-sm" href=""><svg class="bi bi-linkedin" fill="currentColor"
                                    height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                    </path>
                                </svg></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-3">
                    <div class="card-body p-3 pb-0">
                      <div class="img-hover-zoom">
                        <div class="mb-4"><img class="img-fluid" src="image/kurta.jpg"></div>
                        <h5 class="fw-bold">FASHION OUR CHOICE</h5>
                        <!--<div class="text-muted">
                            FIND NOW
                        </div>-->
                                                     <form action="shopnow (2).php" method="get" target="_blank">
                                 <button><div class="text-muted">
                                SHOP NOW
</button>
                                  <!--<form action="shop.php" method="get" target="_blank">
                                <button class="btn btn-primary btn-lg mt-4" type="submit">SHOP NOW</button>-->
                            </form>
                            
                        <div class="d-flex justify-content-center mt-4">
                            <a class="btn btn-sm me-2" href=""><svg class="bi bi-facebook" fill="currentColor"
                                    height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                    </path>
                                </svg></a> <a class="btn btn-sm me-2" href=""><svg class="bi bi-twitter"
                                    fill="currentColor" height="16" viewbox="0 0 16 16" width="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                                    </path>
                                </svg></a> <a class="btn btn-sm" href=""><svg class="bi bi-linkedin" fill="currentColor"
                                    height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                                    </path>
                                </svg></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>




    <!-- ********* Process *********-->
   

    
       
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-2 mb-lg-4">
                <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
                    <span class="text-muted"></span>
                    <h2 class="display-5 fw-bold">Our Process</h2>
                    <p class="lead">
                        Want to make your order fulfillment process more organized and hassle-free? Delivery notes play
                        a key role in ensuring that goods are shipped, received, and recorded accurately, benefiting
                        both businesses and customers alike.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body py-5">
                            <div class="mb-3 mx-auto">
                                <i class="fa-solid fa-truck"></i>
                                <path d="M8 8c.828 0 1.5-.895 1.5-2S8.828 4 8 4s-1.5.895-1.5 2S7.172 8 8 8Z"></path>
                                <path
                                    d="M11.953 8.81c-.195-3.388-.968-5.507-1.777-6.819C9.707 1.233 9.23.751 8.857.454a3.495 3.495 0 0 0-.463-.315A2.19 2.19 0 0 0 8.25.064.546.546 0 0 0 8 0a.549.549 0 0 0-.266.073 2.312 2.312 0 0 0-.142.08 3.67 3.67 0 0 0-.459.33c-.37.308-.844.803-1.31 1.57-.805 1.322-1.577 3.433-1.774 6.756l-1.497 1.826-.004.005A2.5 2.5 0 0 0 2 12.202V15.5a.5.5 0 0 0 .9.3l1.125-1.5c.166-.222.42-.4.752-.57.214-.108.414-.192.625-.281l.198-.084c.7.428 1.55.635 2.4.635.85 0 1.7-.207 2.4-.635.067.03.132.056.196.083.213.09.413.174.627.282.332.17.586.348.752.57l1.125 1.5a.5.5 0 0 0 .9-.3v-3.298a2.5 2.5 0 0 0-.548-1.562l-1.499-1.83ZM12 10.445v.055c0 .866-.284 1.585-.75 2.14.146.064.292.13.425.199.39.197.8.46 1.1.86L13 14v-1.798a1.5 1.5 0 0 0-.327-.935L12 10.445ZM4.75 12.64C4.284 12.085 4 11.366 4 10.5v-.054l-.673.82a1.5 1.5 0 0 0-.327.936V14l.225-.3c.3-.4.71-.664 1.1-.861.133-.068.279-.135.425-.199ZM8.009 1.073c.063.04.14.094.226.163.284.226.683.621 1.09 1.28C10.137 3.836 11 6.237 11 10.5c0 .858-.374 1.48-.943 1.893C9.517 12.786 8.781 13 8 13c-.781 0-1.517-.214-2.057-.607C5.373 11.979 5 11.358 5 10.5c0-4.182.86-6.586 1.677-7.928.409-.67.81-1.082 1.096-1.32.09-.076.17-.135.236-.18Z">
                                </path>
                                <path
                                    d="M9.479 14.361c-.48.093-.98.139-1.479.139-.5 0-.999-.046-1.479-.139L7.6 15.8a.5.5 0 0 0 .8 0l1.079-1.439Z">
                                </path></svg>
                            </div>
                            <h5 class="fw-bold">Fast Delivery</h5>
                            <div class="display-3 fw-bold my-4 text-primary">
                                <i class="fa-solid fa-indian-rupee-sign"></i>5
                            </div>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-3">Super Fast Delivery on all Orders</li>
                            </ul>
                            <!--<a class="btn btn-primary btn-lg mt-4" href="lernmore.php">Learn more</a>-->
                            <form action="lernmore.php" method="get" target="_blank">
                                <button class="btn btn-primary btn-lg mt-4" type="submit">Learn more</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body bg-light py-5">
                            <div class="mb-3 mx-auto">
                                <i class="fa-solid fa-arrows-rotate"></i>
                                <path
                                    d="M9.5 2.672a.5.5 0 1 0 1 0V.843a.5.5 0 0 0-1 0v1.829Zm4.5.035A.5.5 0 0 0 13.293 2L12 3.293a.5.5 0 1 0 .707.707L14 2.707ZM7.293 4A.5.5 0 1 0 8 3.293L6.707 2A.5.5 0 0 0 6 2.707L7.293 4Zm-.621 2.5a.5.5 0 1 0 0-1H4.843a.5.5 0 1 0 0 1h1.829Zm8.485 0a.5.5 0 1 0 0-1h-1.829a.5.5 0 0 0 0 1h1.829ZM13.293 10A.5.5 0 1 0 14 9.293L12.707 8a.5.5 0 1 0-.707.707L13.293 10ZM9.5 11.157a.5.5 0 0 0 1 0V9.328a.5.5 0 0 0-1 0v1.829Zm1.854-5.097a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L8.646 5.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0l1.293-1.293Zm-3 3a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L.646 13.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0L8.354 9.06Z">
                                </path></svg>
                            </div>
                            <h5 class="fw-bold">Exchange</h5>
                            <div class="display-3 fw-bold my-4 text-primary">
                                <i class="fa-solid fa-indian-rupee-sign"></i>10
                            </div>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-3">Exchange? we get your back</li>
                            </ul>
                            <!--<a class="btn btn-primary btn-lg mt-4" href="">Learn more</a>-->
                            <form action="lernmore.php" method="get" target="_blank">
                                <button class="btn btn-primary btn-lg mt-4" type="submit">Learn more</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border-0">
                        <div class="card-body py-5">
                            <div class="mb-3 mx-auto">
                                <!--<svg class="bi bi-buildings" fill="currentColor" height="48" viewbox="0 0 16 16" width="48" xmlns="http://www.w3.org/2000/svg">-->
                                <i class="fa-solid fa-cart-shopping"></i>
                                <path
                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z">
                                </path>
                                <path
                                    d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z">
                                </path></svg>
                            </div>
                            <h5 class="fw-bold">Secure Payment</h5>
                            <div class="display-3 fw-bold my-4 text-primary">
                                <i class="fa-solid fa-indian-rupee-sign"></i>0
                            </div>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-3">Pay with Peace of mind</li>
                            </ul>
                            <!--<a class="btn btn-primary btn-lg mt-4" href="">Learn more</a>-->
                            <form action="lernmore.php" method="get" target="_blank">
                                <button class="btn btn-primary btn-lg mt-4" type="submit">Learn more</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
                                                        
                                                      
                                                                                                     
        


    <!-- *************Footer***************-->

    <?php include ("footer.php");?>

    <!-- Bootstrap JS + dependencies -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>