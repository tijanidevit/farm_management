<?php 
  require_once 'core/session.class.php';
  $session_obj = new Session();
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
  include_once 'components/head.php';

?>
<body>
<!-- Loader
    ============================================= -->
<div id="loader">
  <div class="loader-item"> <img src="img/logo_intro.png" alt="">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
</div>
<div id="wrapper">
  <section class="banner about dark" >
    <div id="menu-single-parallax">
      <div class="bcg background42"
                data-center="background-position: 50% 0px;"
                data-bottom-top="background-position: 50% 100px;"
                data-top-bottom="background-position: 50% -100px;"
                data-anchor-target="#menu-single-parallax"
              >
        <div class="bg-transparent">
          <div class="banner-content">
            <div class="container" >
              <div class="slider-content  "> <i class="icon-home-ico"></i>
                <h1>Menu</h1>
                <p>Come & Taste</p>
                <ol class="breadcrumb">
                  <li><a href="./">Home</a></li>
                  <li><a href="products.php">Menu</a></li>
                  <li><?php echo $food_package['package_name'] ?></li>
                </ol>
              </div>
            </div>
          </div>
          <!-- End Banner content -->
        </div>
        <!-- End bg trnsparent -->
      </div>
    </div>
    <!-- Service parallax -->
  </section>

  <?php include_once 'components/header.php'; ?>
  <div id="content">
    <?php if (!empty($food_package)): ?>
      <section class="single-menu text-left padding-100">
        <div class="container">
          <div class="row">
            <!-- Menu thumb slider -->
            <div class="menu-thumb-slide col-md-6">
              <div id="single-img" class="owl-carousel">
                <div class="item"><img src="images/food_packages/<?php echo $food_package['package_image'] ?>" alt=""></div>
              </div>
            </div>
            <!--End Menu thumb slider -->
            <!-- Menu Desc -->
            <div class="menu-desc col-md-6">
              <h2><?php echo $food_package['package_name'] ?> <span class="pull-right">&#8358;<?php echo $food_package['price'] ?></span></h2>
              <!-- Rating -->
              <fieldset class="rating">
                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span>
              </fieldset>
              <!-- End Rating -->
              <!-- Tagged -->
              <div class="tagged"><span class="label instock">In Stock</span> </div>
              <!-- Ends Tagged -->
              <!-- Description content -->
              <div class="desc-content">
                <p class="lead">Your favourite <?php echo $food_package['package_name'] ?> contains the following:</p>
                <ul>
                  <?php foreach ($food_package_items as $food_package_item): ?>
                    <li><strong><?php echo $food_package_item['food_item'] ?></strong></li>
                  <?php endforeach ?>
                </ul>
                <!-- Meta description -->
                <?php if (isset($_SESSION['customer'])): ?>
                  <div class="meta-desc"> <button class="shop btn btn-gold" href="#" data-toggle="tooltip" title="" data-original-title="Add to Cart" onclick="addToCart(<?php echo $customer_id ?>,<?php echo $food_package['id'] ?>)"><i class="fa fa-shopping-cart"></i></button>
                  </div>
                <?php endif ?>
                <?php if (!isset($_SESSION['customer'])): ?>
                  <div class="meta-desc lead">Login <a href="login.php" class="btn-gold">Here</a> or Register <a href="register.php" class="btn-gold">Here</a> to add product to carts.
                  </div>
                <?php endif ?>

                <div id="message"></div>

                
                <!--End Meta description -->
              </div>
              <!--End Description content -->
            </div>
          </div>
        </div>
      </section>
    <?php endif ?>
  </div>
  <?php include_once 'components/footer.php'; ?>
  <?php include_once 'components/scripts.php'; ?>

</body>
</html>