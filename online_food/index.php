<!DOCTYPE html>
<html lang="en">

<?php 
  include_once 'components/head.php';
  include_once 'core/food_packages.class.php';
  $food_package_obj = new Food_packages();

  $food_packages = $food_package_obj->fetch_limit_food_packages(6);
  include_once 'components/head.php';

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
                <div style="background-image: url(assets/images/topbg.jpg);" class="fixed-bg"></div>
                <div class="restaurant-searching text-center">
                    <div class="restaurant-searching-inner">
                        <h2 itemprop="headline">Order <span>Food Online From</span> Fumzy Foods</h2>
                        <div class="funfacts">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fact-box">
                                    <i class="brd-rd50"><img src="assets/images/resource/fact-icon2.png" alt="fact-icon2" itemprop="image"></i>
                                    <div class="fact-inner">
                                        <strong><span class="counter">158</span></strong>
                                        <h5>People Served</h5>
                                    </div>
                                </div><!-- Fact Box -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fact-box">
                                    <i class="brd-rd50"><img src="assets/images/resource/fact-icon3.png" alt="fact-icon3" itemprop="image"></i>
                                    <div class="fact-inner">
                                        <strong><span class="counter">659</span>K</strong>
                                        <h5>Happy Service</h5>
                                    </div>
                                </div><!-- Fact Box -->
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="fact-box">
                                    <i class="brd-rd50"><img src="assets/images/resource/fact-icon4.png" alt="fact-icon4" itemprop="image"></i>
                                    <div class="fact-inner">
                                        <strong><span class="counter">235</span></strong>
                                        <h5>Regular users</h5>
                                    </div>
                                </div><!-- Fact Box -->
                            </div>
                        </div><!-- Fun Facts -->
                    </div>
                    <img class="left-scooty-mockup" src="assets/images/resource/restaurant-mockup1.png" alt="restaurant-mockup1.png" itemprop="image">
                    <img class="bottom-clouds-mockup" src="assets/images/resource/clouds.png" alt="clouds.png" itemprop="image">
                </div><!-- Restaurant Searching -->
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
                                    <span>Your Favourite Food</span>
                                    <h2 itemprop="headline">Choose & Enjoy</h2>
                                </div>
                            </div>
                            <div class="row remove-ext5">

                                <?php foreach ($food_packages as $food_package): ?>
                                    
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="food-detail.php?id=<?php echo $food_package['id'] ?>" title="" itemprop="url"><img src="images/food_packages/<?php echo $food_package['package_image'] ?>" style="max-height: 300px;min-height: 300px; width: 100%" alt="<?php echo $food_package['package_name'] ?>" itemprop="image"></a>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.php?id=<?php echo $food_package['id'] ?>" title="" itemprop="url">
                                                        <?php echo $food_package['package_name'] ?></a></h4>
                                                <span class="price">&#8358;<?php echo $food_package['price'] ?></span>
                                                <?php if (isset($customer_id)): ?>
                                                    <button class="btn btn-lg brd-rd2" onclick="addToCart(<?php echo $customer_id ?>,<?php echo $food_package['id'] ?>,1)" title="Add to cart" itemprop="url">Add to cart</button>
                                                <?php endif ?>
                                                <?php if (!isset($customer_id)): ?>
                                                    <a href="auth.php" class="alert alert-warning">Please sign up or login to add to cart</a>  
                                                <?php endif ?>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                <?php endforeach ?>
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

</html>