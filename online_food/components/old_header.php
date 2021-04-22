<header id="header" class="header-transparent">
    <div class="container">
      <div class="row">
        <div id="main-menu-trigger"><i class="fa fa-bars"></i></div>
        <!-- Logo
                    ============================================= -->
        <div id="logo"> <a href="./" class="light-logo"><img src="img/logo.png" alt="Logo"></a> <a href="./" class="dark-logo"><img src="img/logo_dark.png" alt="Logo"></a> </div>
        <!--End #logo  -->
        <!-- Primary Navigation
                    ============================================= -->
        <nav id="main-menu" class="dark">
          <ul>
            <li><a href="./">
              <div>Home</div>
              </a>
            </li>
            <li><a href="products.php">
              <div>Products</div>
              </a>
            </li>
            <?php if (isset($_SESSION['customer_id'])): ?>
              <li><a href="profile.php">
                <div>Profile</div>
                </a> 
              </li>
              <li><a href="logout.php">
                <div>Logout</div>
                </a> 
              </li>
            <?php endif ?>

            <?php if (!isset($_SESSION['customer_id'])): ?>
              <li><a href="register.php">
                <div>Register</div>
                </a> 
              </li>
              <li><a href="login.php">
                <div>Login</div>
                </a> 
              </li>
            <?php endif ?>
            
          </ul>
          <!-- Top Cart
                        ============================================= -->
          <div id="shop_cart" > <a href="cart.php"><i class="fa fa-shopping-cart"></i><span id="cart_count"></span></a>
            <!-- End shop cart content -->
          </div>
          <!-- End shop cart -->
        </nav>
        <!-- #main-menu end -->
      </div>
    </div>
</header>