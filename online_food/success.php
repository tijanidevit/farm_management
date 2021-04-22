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
                <h2 class="text-center" style="color: #fff;">Your order has been placed successfully. Expect delivery soon</h2>
                <div style="background-image: url(assets/images/topbg.jpg);" class="fixed-bg"></div>
                <div class="restaurant-searching text-center">
                    <center><img src="images/check.gif" style="max-height: 200px;"></center>
                    <img class="left-scooty-mockup" src="assets/images/resource/restaurant-mockup1.png" alt="restaurant-mockup1.png" itemprop="image">
                    <img class="bottom-clouds-mockup" src="assets/images/resource/clouds.png" alt="clouds.png" itemprop="image">
                </div><!-- Restaurant Searching -->
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <!-- <div class="top-mockup"><img src="assets/images/resource/mockup2.png" alt=""></div> -->
                    <div class="row">
                       <!--  <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Your Favourite Food</span>
                                    <h2 itemprop="headline">Choose & Enjoy</h2>
                                </div>
                            </div>
                            <div class="row remove-ext5">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->



        <?php include "components/footer.php"; ?>
    </main><!-- Main Wrapper -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="ajax/app.js"></script>
</body>

</html>