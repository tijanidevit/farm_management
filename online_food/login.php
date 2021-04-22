
<!DOCTYPE html>
<html lang="en">
<body>
  <?php include_once 'components/head.php'; ?>
  <?php 
    if (isset($_SESSION['customer'])) {
      header('location: ./');
    }
  ?>
<div id="loader3">
  <div class="loader-item"> <img src="img/logo_intro.png" alt="">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
</div>
<!-- End Loader -->
<!-- Document Wrapper
    ============================================= -->
<div id="wrapper">
  <!-- Full Background BG 
        ============================================= -->
  <section class="login-full dark clearfix" >
    <!-- Bg Full Bg -->
    <div class="fullheight full-bg background40">
      <div class="bg-transparent">
        <!-- Slider content -->
        <div class="slider-content">
          <h1>Login</h1>
          <span class="welcome ">Login to continue</span>
          <div class="form-group padding-50">
            <form id="loginForm">
              <div id="message"></div>
              <input type="text" name="username" class="form-control" placeholder="UserName">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <button type="submit" class="btn form-control btn-white">Login</button>
            </form>
          </div>
          <div class="forget text-center">
            <p><a href="register.php">Create an account <i class="fa fa-chevron-circle-right"></i></a></p>
          </div>
        </div>
        <!-- End Slider content -->
      </div>
      <!-- End Bg Transparent -->
    </div>
    <!-- End Full Bg -->
  </section>
  <!-- End Full Screen BG -->
  <!-- Header Sticky One page
    ============================================= -->
  <?php include_once 'components/footer.php'; ?>
  <?php include_once 'components/scripts.php'; ?>

</body>
</html>