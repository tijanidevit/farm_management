<?php 
  include_once 'components/head.php';
  include_once 'core/food_packages.class.php';
  $food_package_obj = new Food_packages();

  $food_packages = $food_package_obj->fetch_limit_food_packages(9);
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
  <section id="home-header" class="zooming-slider dark fullheight">
    <div class="bg-transparent fullheight">
      <!-- Slider content -->
      <div class="slider-content">
        <!-- Text Rotater -->
        <ul id="fade">
          <li>
            <h1>Food ordering at your own conveniencies</h1>
          </li>
          <li>
            <h1>most delicious food</h1>
          </li>
          <li>
            <h1>most healthy food</h1>
          </li>
        </ul>
        <!-- End Text Rotater -->
        <i class="icon-home-ico"></i>
        <p class="text-uppercase">We Create Sweet Memories</p>
        <a href="about.php" class="btn btn-gold white">DISCOVER MORE</a> </div>
      <!-- End Slider content  -->
    </div>
  </section>

  <?php include_once 'components/header.php'; ?>
  <div id="content">
    <section  class="padding-100 welcome-block">
      <div class="container">
        <div class="row">
          <!-- Left Img Intro -->
          <div class="col-md-8 text-center">
          <!-- Head Title -->
            <div class="head_title">
                <i class="icon-intro"></i>
                <h1>ABOUT US</h1>
                <span class="welcome">Welcome to Fumzy Foods</span>
            </div>
            <!-- End# Head Title -->
            <p>Fumzy Foods is  a team work of  Fumzy Foods Restaurant Cafe, we aim at promoting the foodstuff industry through the branches , we establish and through the new dishes. and integrate between different cultures.</p>
            <a href="about.php" class="btn btn-gold">READ MORE</a> </div>
          <div class="col-md-4"> <img class="img-responsive" src="img/right-image.jpg" alt=""> </div>
        </div>
      </div>
    </section>
    <!-- End welcome block -->
    <!-- Discover
    ============================================= -->
    <section id="slide-2" class="discover dark text-center">
      <!-- Parallax Bg -->
      <div class="bcg background14"
        data-center="background-position: 50% 0px;"
        data-bottom-top="background-position: 50% 100px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#slide-2"
    >
        <!-- Bg Transparent -->
        <div class="bg-transparent padding-100" >
          <div class="container">
            <h1>WE CREATE DELICOUS MEMORIES</h1>
            <p class="text-uppercase">You can promote your creative parallax effects</p>
            <a href="about.php" class="btn btn-gold white">DISCOVER MORE</a> </div>
        </div>
        <!-- End Bg transparent -->
      </div>
      <!-- End Parallax Bg -->
    </section>
    <!-- End Reservation -->
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
          <!-- Menu Title -->
          <div class="menu-title padding-50" style="background-image: url('img/menu/bg1.jpg');">
            <h1 class="margin0">FOOD PACKAGES</h1>
          </div>
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