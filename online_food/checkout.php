<!DOCTYPE html>
<html lang="en">
<?php 
  include_once 'components/head.php';


  if (!isset($_SESSION['customer_id'])) {
    header('location: auth.php');
  }
  include_once 'core/carts.class.php';
  include_once 'core/delivery_spots.class.php';
  $cart_obj = new Carts();
  $delivery_spot_obj = new Delivery_spots();
  $carts = $cart_obj->fetch_cart($customer_id);
  $total_price = 0;
  $food_packages = '';
  $delivery_spots = $delivery_spot_obj->fetch_delivery_spots();
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
                            <h1 itemprop="headline">Check out</h1>
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
                                    <h2 itemprop="headline">Check out & Enjoy</h2>
                                </div>
                            </div>
                            <div class="row remove-ext5">

                              <?php if (!empty($carts)): ?>
                                <section class="carts text-center padding-100">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-12">
                                          <div style="text-align: center;"><h2>Checkout</h2></div>
                                            <div class="row">
                                              <!-- Cart Total -->
                                              <div class="col-md-6">
                                                <table class="table">
                                                  <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                  </tr>
                                                  <?php foreach ($carts as $cart): ?>
                                                    <?php 
                                                      $total_price += (int)$cart['price'];
                                                      $food_packages .= $cart['package_name'].', ';
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $cart['package_name'] ?></td>
                                                    <td>&#8358;<?php echo $cart['price'] ?></td>
                                                  </tr>
                                                  <?php endforeach ?>

                                                  <tfoot>
                                                    <tr style="font-weight: bold;">
                                                      <td>Total Price</td>
                                                      <td>&#8358;<span id="amount"><?php echo $total_price ?></span></td>
                                                    </tr>
                                                  </tfoot>
                                                </table>
                                              </div>
                                              <div class="col-md-6">
                                                <form id="checkoutForm">
                                                  <div class="form-group">
                                                    <div id="message"></div>
                                                    <label>Select a delivery spot</label>
                                                    <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>">
                                                    <input type="hidden" name="food_packages" value="<?php echo $food_packages ?>">
                                                    <select class="form-control brd-rd3" name="delivery_spot_id">
                                                      <?php foreach ($delivery_spots as $delivery_spot): ?>
                                                        <option value="<?php echo $delivery_spot['id'] ?>"><?php echo $delivery_spot['delivery_spot'] ?></option>
                                                      <?php endforeach ?>                      
                                                    </select>
                                                  </div>

                                                  <div class="form-group">
                                                    <label>Select time of delivery</label>
                                                    <input type="time" class="form-control" name="delivery_time">
                                                  </div>
                                                  <div class="form-group">
                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                    <button class="btn btn-dark"> Process Payment </button>
                                                  </div>
                                                </form>
                                              </div>
                                            </div>
                                        </div>
                                      <!-- End Table carts  -->
                                    </div>
                                  </div>
                                </div>
                              </section>
                              <?php endif ?>



                              <?php if (empty($carts)): ?>
                                <section class="carts text-center padding-100">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div style="text-align: center;"><h2>You have not added any product to your cart. Check out products <a href="products.php">Here</a></h2></div>
                                    </div>
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










