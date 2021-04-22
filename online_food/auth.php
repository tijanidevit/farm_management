<!DOCTYPE html>
<html lang="en">

<?php 
  include_once 'components/head.php';
  if (isset($customer_id)) {
      echo "<script>window.history.back()</script>";
  }

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
                            <h1 itemprop="headline">Login & Register</h1>
                                <span>A Greate Restaurant Website</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="login-register-wrapper">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="sign-popup-wrapper brd-rd5">
                                            <div class="sign-popup-inner brd-rd5">
                                                <div class="sign-popup-title text-center">
                                                    <h4 itemprop="headline">SIGN IN</h4>
                                                </div>
                                                <span class="popup-seprator text-center"><i class="brd-rd50"></i></span>
                                                <form class="sign-form" id="loginForm">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div id="loginMessage"></div>
                                                            <input class="brd-rd3" name="username" type="text" placeholder="Username">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input class="brd-rd3" name="password" type="password" placeholder="Password">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="sign-popup-wrapper brd-rd5">
                                            <div class="sign-popup-inner brd-rd5">
                                                <div class="sign-popup-title text-center">
                                                    <h4 itemprop="headline">SIGN UP</h4>
                                                </div>
                                                <span class="popup-seprator text-center"><i class="brd-rd50"></i></span>
                                                
                                                <form class="sign-form" id="registerForm" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div id="registerMessage"></div>
                                                            <input class="brd-rd3" type="text" name="fullname" placeholder="Fullname">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input class="brd-rd3" type="text" name="username" placeholder="Username">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input class="brd-rd3" type="text" name="phone" placeholder="Phone">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input class="brd-rd3" type="file" accept="image/*" name="image">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <input class="brd-rd3" type="password" name="password" placeholder="Password">
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <button class="red-bg brd-rd3" type="submit">REGISTER NOW</button>
                                                        </div>
                                                    </div>
                                                </form>
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


        <?php include "components/footer.php"; ?>
    </main><!-- Main Wrapper -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="ajax/app.js"></script>
</body>

</html>