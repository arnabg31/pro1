
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



<!--<section class="py-5">
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
        
    </div>
    </div>
</div>
</section>
        </div>-->

        
    <!--Shopping Cart-->
    

        <div class="container bg-white rounded-top mt-5" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12 pt-3">
            <div class="d-flex">
                <div class="pt-1"><h4>Collection</h4></div>
                <div class="ml-auto p-2"><a href="#" class="text-dark text-decoration-none" id="mobile-font">LOGIN</a></div>
                <div class="p-2"><a href="#" class="text-dark text-decoration-none a" id="mobile-font">HELP</a></div>                                            
            </div>
            <div class="d-flex flex-column pt-4">
                <div><h5 class="text-uppercase font-weight-normal">shopping bag</h5></div>
                <div class="font-weight-normal"> Items</div>
            </div>
            <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                <div class="px-lg-5 mr-lg-5" id="produc">PRODUCTS</div>
                <div class="px-lg-5 ml-lg-5" id="prc">PRICE</div>
                <div class="px-lg-5 ml-lg-1" id="quantity">QUANTITY</div>
                <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="image/plain-silk-saree-with-golden-border_2048x2048.webp" width="150" height="150" alt="" id="image"></div>
                    <div class="d-flex flex-column pl-md-3 pl-1">
                        <div><h6>Anand Sarees</h6></div>
                        <div >Art.No:<span class="pl-2">091091001</span></div>
                        <div>Color:<span class="pl-3">Red,Orange,pink</span></div>
                       <!-- <div>Size:<span class="pl-4"> M</span></div>-->
                    </div>                    
                </div>
                <div class="pl-md-0 pl-1"><b><i class="fa-solid fa-indian-rupee-sign"></i>9.99</b></div>
                <div class="pl-md-0 pl-2">
                    <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1"></span><span class="fa fa-plus-square text-secondary"></span>
                </div>
                <div class="pl-md-0 pl-1"><b><i class="fa-solid fa-indian-rupee-sign"></i>19.98</b></div>
                <div class="close">&times;</div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="image/da8915e383f15ed39fe72cbb9eb4816c.jpg" width="150" height="150" alt="" id="image"></div>
                    <div class="d-flex flex-column pl-md-3 pl-1">
                        <div><h6>Anand Sarees</h6></div>
                        <div >Art.No:<span class="pl-2">056289891</span></div>
                        <div>Color:<span class="pl-3">White</span></div>
                       <!-- <div>Size:<span class="pl-4"> XL</span></div>-->
                    </div>                    
                </div>
                <div class="pl-md-0 pl-1"><b><i class="fa-solid fa-indian-rupee-sign"></i>20.9</b></div>
                <div class="pl-md-0 pl-2">
                    <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span>
                </div>
                <div class="pl-md-0 pl-1"><b><i class="fa-solid fa-indian-rupee-sign"></i>41.8</b></div>
                <div class="close">&times;</div>
            </div>

        </div>
    </div>
</div>
<div class="container bg-light rounded-bottom py-4" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button class="btn btn-sm bg-light border border-dark">GO BACK</button>
                </div>
                <div class="px-md-0 px-1" id="footer-font">
                    <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">$61.78</span></b>
                </div>
                <div>
                    <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">CONTINUE</button>
                </div>
            </div>
            <div class="container text-center" style="margin-top: 50px;">
<button type="button" class="btn btn-primary btn-lg">
<span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
</button>
<button type="button" class="btn btn-primary btn-lg">
<span class="glyphicon glyphicon-shopping-cart"></span> Buy Now
</button>
</div>
</div>

        </div>
    </div>
</div>


</body>
</html>