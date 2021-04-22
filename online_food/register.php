

<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>
<?php 
  if (isset($_SESSION['customer'])) {
    header('location: ./');
  }
?>
<body >
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
<!-- Document Wrapper
    ============================================= -->
<div id="wrapper">
  <!-- banner 
    ============================================= -->
  <section class="banner dark" >
    <div id="contact-parallax">
      <div class="bcg background39"
                data-center="background-position: 50% 0px;"
                data-bottom-top="background-position: 50% 100px;"
                data-top-bottom="background-position: 50% -100px;"
                data-anchor-target="#contact-parallax"
              >
        <div class="bg-transparent">
          <div class="banner-content">
            <div class="container" >
              <div class="slider-content"> <i class="icon-home-ico"></i>
                <h1>Register</h1>
                <p>Apply your information in few mintues</p>
                <ol class="breadcrumb">
                  <li><a href="index01.html">Home</a></li>
                  <li>Register</li>
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
  <!-- End Banner -->
  <!-- Header
    ============================================= -->
 <?php include_once 'components/header.php'; ?>
  <!-- End header -->
  <div id="content">
    <!-- Our Register
    ============================================= -->
    <section class="contact text-center padding-100">
      <div class="container">
        <div class="row"> 
        <!-- Head Title -->
            <div class="head_title">
                <i class="icon-intro"></i>
                <h1>Register</h1>
                <span class="welcome">Submit your information</span>
            </div>
            <!-- End# Head Title -->
          <!-- Contact form -->
          <div class="contact-form">
            <form method="post" id="registerForm" enctype="multipart/form-data">
              <div id="message"></div>
              <!-- Form Group -->
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-sx-12">
                    <!-- Element -->
                    <div class="element">
                      <input type="text" name="fullname" class="form-control text" required placeholder="Full Name *" />
                    </div>
                    <!-- End Element -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-sx-12">
                    <!-- Element -->
                    <div class="element">
                      <input type="text" name="username" class="form-control text" required placeholder="Username *" />
                    </div>
                    <!-- End Element -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-sx-12">
                    <!-- Element -->
                    <div class="element">
                      <input type="text" name="phone" class="form-control text" required placeholder="Phone" />
                    </div>
                    <!-- End Element -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-sx-12">
                    <!-- Element -->
                    <div class="element">
                      <input type="file" name="image" class="form-control text" required accept="image/*" />
                    </div>
                    <!-- End Element -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-sx-12">
                    <!-- Element -->
                    <div class="element">
                      <input type="password" name="password" class="form-control text" required placeholder="***********" />
                    </div>
                </div>
              </div>
              <!-- End form group -->
              <!-- Element -->
              <div class="element">
                <button class="btn btn-black">Submit</button>
                <div class="loading"></div>
              </div>
              <!-- End Element -->
            </form>
            <div class="done mt30"> <strong>Thank you!</strong> We have received your message. </div>
          </div>
          <!-- End contact form -->
        </div>
      </div>
    </section>
    <!-- End Register -->
  </div>
  <!-- end of #content -->
  <!-- Footer
    ============================================= -->
  <?php include_once 'components/footer.php'; ?>
  <?php include_once 'components/scripts.php'; ?>