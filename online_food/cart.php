<?php 
  include_once 'components/head.php';
  
  if (!isset($_SESSION['customer_id'])) {
    header('location: login.php');
  }
  include_once 'core/carts.class.php';
  $cart_obj = new carts();

  $carts = $cart_obj->fetch_cart($customer_id);

  $total_price = 0;

?>
<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "components/header.php"; ?>

        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Your Cart</h1>
                            <span>Click checkout to complete order now</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <div class="top-mockup"><img src="assets/images/resource/mockup2.png" alt=""></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Your Favourite Food Products</span>
                                    <h2 itemprop="headline">Order & Enjoy</h2>
                                </div>
                            </div>
                            <div class="row remove-ext5">

                              <?php if (!empty($carts)): ?>
                                <section class="carts text-center padding-100">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <!-- Table carts -->
                                      <table class="table table-striped table-responsive table-cart">
                                        <thead>
                                          <tr>
                                            <th style="width:40%">Product Name</th>
                                            <th style="width:15%">Price</th>
                                            <th style="width:20%">Quantity</th>
                                            <th style="width:20%">Cancel</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($carts as $cart): ?>
                                            <?php $total_price += (int)$cart['price'] ?>
                                            <tr>
                                            <td><?php echo $cart['package_name'] ?></td>
                                            <td>&#8358;<?php echo $cart['price'] ?></td>
                                            <td><?php echo $cart['quantity'] ?></td>
                                            <td><button class="pull-righ" onclick="removeFromCart(<?php echo $cart['id'] ?>)"><i class="fa fa-times"></i></button></td>
                                          </tr>
                                          <?php endforeach ?>
                                        </tbody>
                                      </table>
                                      <!-- End Table carts  -->
                                    </div>
                                    <!-- Carts content -->
                                    <div class="col-md-12 carts-content">
                                      <div class="row">
                                        <!-- Left side -->
                                        <div class="col-md-5 left-side">
                                          <b>Total Price = <?php echo $total_price ?></b>
                                        </div>
                                        <!-- End Left side -->
                                        <!-- Right side -->
                                        <div class="col-md-5 col-md-offset-2 right-side">
                                          <div class="form-group text-right checkout">
                                            <a href="checkout.php" class="btn  btn-black">PROCEED TO CHECKOUT</a>
                                          </div>
                                        </div>
                                        <!--End Right side -->
                                      </div>
                                    </div>
                                    <!--End Carts content -->
                                  </div>
                                </div>
                              </section>
                              <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->


        <section>
            <div class="block blackish low-opacity">
                <div class="fixed-bg" style="background-image: url(assets/images/parallax1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Fumzy Foods</span>
                                    <h2 class="text-white" itemprop="headline">easy order in 3 steps</h2>
                                </div>
                            </div>
                            <div class="remove-ext text-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                            <i><img src="assets/images/resource/setp-img1.png" alt="setp-img1.png" itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Explore Restaurants</h4>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                            <i><img src="assets/images/resource/setp-img2.png" alt="setp-img2.png" itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Choose a Tasty Dish</h4>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                            <i><img src="assets/images/resource/setp-img3.png" alt="setp-img3.png" itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Follow The Status</h4>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include "components/footer.php"; ?>
    </main><!-- Main Wrapper -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="ajax/app.js"></script>
</body>

</body>
</html>