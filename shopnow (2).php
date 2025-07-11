
<!DOCTYPE html>
<html lang="en">
<head>
  <title>pro1</title>
   <!--fav icons-->
    <link rel="icon" href="image\logo1.png" type="image/x-icon">
  <link rel="shortcut icon" href="image\logo1.png" type="image/x-icon">

  <!-- Bootstrap CSS and JS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>



<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-2 mb-lg-4">
            <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
                <span class="text-muted"></span>
                <h2 class="display-5 fw-bold">Online Purchase</h2>
                <p class="lead">
                    Online shopping is a form of electronic commerce that allows consumers to directly buy goods or
                    services from a seller over the Internet using a web browser or a mobile app.
                </p>
            </div>
        </div>
        <div class="row">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
<div class="container">                
<div class="contentbar">                
        
        <div class="row">
            
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="cart-container">
                                    <div class="cart-head">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Action</th>                                               
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="https://themesbox.in/admin-templates/olian/html/light-vertical/assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple Watch</td>
                                                        <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control cart-qty" name="cartQty1" id="cartQty1" value="1">
                                                            </div>
                                                        </td>
                                                        <td><i class="fa-solid fa-indian-rupee-sign"></i>10</td>
                                                        <td class="text-right"><i class="fa-solid fa-indian-rupee-sign"></i>500</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                       <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="https://themesbox.in/admin-templates/olian/html/light-vertical/assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple iPhone</td>
                                                        <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control cart-qty" name="cartQty2" id="cartQty2" value="1">
                                                            </div>
                                                        </td>
                                                        <td><i class="fa-solid fa-indian-rupee-sign"></i>20</td>
                                                        <td class="text-right"><i class="fa-solid fa-indian-rupee-sign"></i>200</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><a href="#" class="text-danger"><i class="ri-delete-bin-3-line"></i></a></td>
                                                        <td><img src="https://themesbox.in/admin-templates/olian/html/light-vertical/assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple iPad</td>
                                                        <td>
                                                            <div class="form-group mb-0">
                                                                <input type="number" class="form-control cart-qty" name="cartQty3" id="cartQty3" value="1">
                                                            </div>
                                                        </td>
                                                        <td><i class="fa-solid fa-indian-rupee-sign"></i>30</td>
                                                        <td class="text-right"><i class="fa-solid fa-indian-rupee-sign"></i>300</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-body">
                                        <div class="row">
                                            <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                <div class="order-note">
                                                    <form>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="search" class="form-control" placeholder="Coupon Code" aria-label="Search" aria-describedby="button-addonTags">
                                                                <div class="input-group-append">
                                                                    <button class="input-group-text" type="submit" id="button-addonTags">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="specialNotes">Please Select your Address order:</label>
                                                            <textarea class="form-control" name="specialNotes" id="specialNotes" rows="3" placeholder="Message here"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                <div class="order-total table-responsive ">
                                                    <table class="table table-borderless text-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>Sub Total :</td>
                                                                <td><i class="fa-solid fa-indian-rupee-sign"></i>000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping :</td>
                                                                <td><i class="fa-solid fa-indian-rupee-sign"></i>0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tax(10%) :</td>
                                                                <td><i class="fa-solid fa-indian-rupee-sign"></i>00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="f-w-7 font-18"><h4>Amount :</h4></td>
                                                                <td class="f-w-7 font-18"><h4><i class="fa-solid fa-indian-rupee-sign"></i>0000.00</h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <button type="button" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i>Update Cart</button>
                                        <a href="page-checkout.html" class="btn btn-success my-1">Proceed to Checkout<i class="ri-arrow-right-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <h3>JHUMA BETAL</h3>
    </div>
    </div>
</div>
</section>
        </div>






</body>
</html>

