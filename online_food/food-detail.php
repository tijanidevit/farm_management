<?php 
  include_once 'components/head.php';
  include_once 'core/food_packages.class.php';
  include_once 'core/food_package_items.class.php';
  $food_package_obj = new Food_packages();
  $food_package_item_obj = new Food_package_items();

  if (!isset($_GET['id'])) {
    header('location: products.php');
  }

  $id = $_GET['id'];  

  $food_package = $food_package_obj->fetch_food_package($id);
  $food_package_items = $food_package_item_obj->fetch_food_package_items($id);

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

        <?php include_once 'components/header.php'; ?>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item">Food Details</li>
                    <li class="breadcrumb-item active"><?php echo $food_package['package_name'] ?></li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="restaurant-detail-wrapper">
                                            <div class="restaurant-detail-info">
                                                <div class="restaurant-detail-thumb">
                                                    <ul class="restaurant-detail-img-carouse">
                                                        <li><img class="brd-rd3" src="images/food_packages/<?php echo $food_package['package_image'] ?>" alt="<?php echo $food_package['package_name'] ?>" itemprop="image"></li>
                                                    </ul>
                                                </div>
                                                <div class="restaurant-detail-title">
                                                    <h1 itemprop="headline"><?php echo $food_package['package_name'] ?></h1>
                                                    <div class="rating-wrapper">
                                                        <a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-star"></i> Rating <i>5.0</i></a>
                                                    </div>
                                                    <span class="price">&#8358;<?php echo $food_package['price'] ?></span>
                                                    <!-- <div class="qty-wrap">
                                                        <input class="qty" id="change-qty" type="text" value="1">
                                                    </div> -->
                                                    <div><p itemprop="description"><?php echo $food_package['description'] ?> <?php if (!empty($food_package_items)): ?> <br>
                                                        Your favourite <?php echo $food_package['package_name'] ?> contains
                                                        <ul>
                                                            <?php foreach ($food_package_items as $food_package_item): ?>
                                                                <li><?php echo $food_package_item['food_item'] ?></li>
                                                            <?php endforeach ?>
                                                        </ul>
                                                    <?php endif ?> </p></div>
                                                    <?php if (isset($customer_id)): ?>
                                                        <button class="btn btn-lg brd-rd2" onclick="addToCart(<?php echo $customer_id ?>,<?php echo $food_package['id'] ?>,1)" title="Add to cart" itemprop="url">Add to cart</button>
                                                    <?php endif ?>
                                                    <?php if (!isset($customer_id)): ?>
                                                        <a href="auth.php" class="alert alert-warning">Please sign up or login to add to cart</a>  
                                                    <?php endif ?>
                                                    <!-- <a class="brd-rd3 cash-popup-btn" href="#" title="" itemprop="url">Add to cart</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="order-wrapper">
                                            <div class="order-inner gradient-brd">
                                                <h4 itemprop="headline">Your Order</h4>
                                                <div class="order-list-wrapper">
                                                    <ul class="order-list-inner">
                                                        <li>
                                                            <div class="dish-name">
                                                                <h6 itemprop="headline"><?php echo $food_package['package_name'] ?></h6> <span class="price">&#8358;<?php echo $food_package['price'] ?></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="order-total">
                                                        <li><span>SubTotal</span> <i>&#8358;<span id="price"><?php echo $food_package['price'] ?></span></i></li>
                                                        <li><span>Quantity</span> <i><span id="qty-span">1</span></i></li>
                                                    </ul>
                                                    <ul class="order-method brd-rd2 red-bg">
                                                        <li><span>Total</span> <span class="price">&#8358;<span class="total-price"><?php echo $food_package['price'] ?></span></span></li>
                                                        <li>
                                                            <?php if (isset($customer_id)): ?>
                                                                <button class="btn btn-lg btn-success" onclick="addToCart(<?php echo $customer_id ?>,<?php echo $food_package['id'] ?>,1)" title="Add to cart" itemprop="url">Add to cart</button>
                                                            <?php endif ?>
                                                            <?php if (!isset($customer_id)): ?>
                                                                <a href="auth.php" class="alert alert-warning">Please sign up or login to add to cart</a>  
                                                            <?php endif ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Section Box -->
            </div>
        </section>

        <?php include_once 'components/footer.php'; ?>


        <div class="payment-popup-wrapper cash-method text-center">
            <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
                <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Cash Payment</h4>
                <div class="payment-popup-info">
                    <h5 itemprop="headline">Billing Details</h5>
                    <form class="payment-popup-info-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <ul class="payment-info-list">
                                    <li><span>Name:</span> <input type="text" id="customer-name" class="form-control"></li>
                                    <li><span>Email:</span> <input type="email" id="customer-email" class="form-control"></li>
                                    <li><span>Phone:</span> <input type="text" id="customer-phone" class="form-control"></li>
                                    <li><span>Address:</span> <input type="text" id="customer-address" class="form-control"></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Order Note <sup>*</sup></label>
                                <textarea class="brd-rd3" id="order-note" placeholder="Description..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="confrm-order red-bg">
                    <ul class="order-total">
                        <li><span>SubTotal</span> <i>&#8358;<span class="total-price">3000</span></i></li>
                    </ul>
                    <div class="confrm-order-btn">
                        <form>
                            <a class="brd-rd3" href="#" title="" id="pay-btn" style="background-color: #000;color:#fff;padding:10px">MAKE PAYMENT</a>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <div class="payment-popup-wrapper thanks-message text-center">
            <div class="payment-popup-inner red-bg">
                <i><img src="assets/images/tick-icon.png" alt="tick-icon.png" itemprop="image"></i>
                <h3 itemprop="headline">Thanks For Your Order</h3>
                <p itemprop="description">You Will Receive a Phone Call Confirmation Shortly at <a href="#" title="" itemprop="url" id="user-phone"></a></p>
                <img class="thanks-message-mockup right" src="assets/images/resource/thanks-message-mockup.png" alt="thanks-message-mockup.png" itemprop="image">
            </div>
        </div>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="ajax/app.js"></script>
   </body>

</html>