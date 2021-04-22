<?php 
  require_once 'core/session.class.php';
  $session_obj = new Session();
  include_once 'components/head.php';
  include_once 'core/food_packages.class.php';
  $food_package_obj = new Food_packages();

  $food_packages = $food_package_obj->fetch_food_packages();
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
<!-- End Loader -->
<!-- Document Wrapper
    ============================================= -->
<div id="wrapper">
  <!-- Zooming Slider
    ============================================= -->


  <?php include_once 'components/header.php'; ?>
  <div id="content">
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
                  <li>Cart</li>
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
    <!-- End welcome block -->
    <!-- Discover
    ============================================= -->
   
    <!-- Our menu
    ============================================= -->
     <section class="padding-100 text-center our-menu"> 
      <div class="col-md-8 col-md-offset-2">
      <!-- Head Title -->
        <div class="head_title">
            <i class="icon-intro"></i>
            <h1>OUR MENU</h1>
            <span class="welcome">Choose & Taste</span>
        </div>
        <!-- End# Head Title -->
        <div class="clearfix"></div>
        <!-- Menu Content -->
        <div class="darkgray padding-b-60 col-md-offset-3 col-md-6">
          <p>Majesty is  a team work of  Majesty Restaurant & Cafe, we aim at promoting the foodstuff industry through the branches , we establish and through the new dishes. and integrate between different cultures, by merging different Oriental  and its western recipes</p>
        </div>
        <!-- End Menu Content -->
      </div>
      <div class="clearfix"></div>
      <!-- Menu Items
         ============================================= -->
      <!-- Menu Container -->
      <div class="menu-container dark">
        <!-- Menu Type -->
        <div class="menu-type">
          <!-- End Menu Title -->
          <div class="container">
            <div class="row">
              <!-- Item -->
              <?php foreach ($food_packages as $food_package): ?>
                
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                  <!-- Overlay Content -->
                  <div class="overlay_content overlay-menu overlay-menu">
                    <!-- Overlay Item -->
                    <div class="overlay_item"> <img src="images/food_packages/<?php echo $food_package['package_image'] ?>" alt="" style="">
                      <!-- Overlay -->
                      <div class="overlay">
                        <!-- Icons -->
                        <div class="icons">
                          <h3><?php echo $food_package['package_name'] ?></h3>
                          <h3>&#8358;<?php echo $food_package['price'] ?></h3>
                          <!-- Rating -->
                          <fieldset class="rating">
                            <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span>
                          </fieldset>
                          <!-- End Rating -->
                          <!-- Buttons -->
                          <div class="button"><button class="shop btn btn-gold" href="#" data-toggle="tooltip" title="" data-original-title="Add to Cart" onclick="addToCart(<?php echo $customer_id ?>,<?php echo $food_package['id'] ?>)"><i class="fa fa-shopping-cart"></i></button> <a class="btn btn-gold" href="product.php?id=<?php echo $food_package['id'] ?>"><i class="fa fa-link"></i></a> </div>
                          <!-- End Buttons -->
                          <a class="close-overlay hidden">x</a> </div>

                          <div id="message"></div>
                        <!-- End Icons -->
                      </div>
                      <!-- End Overlay -->
                    </div>
                    <!-- End Overlay Item -->
                  </div>
                  <!-- End Overlay Content -->
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End Menu container -->
    </section>
    <!-- End our menu -->
  </div>
  <?php include_once 'components/footer.php'; ?>
  <?php include_once 'components/scripts.php'; ?>

</body>
</html>