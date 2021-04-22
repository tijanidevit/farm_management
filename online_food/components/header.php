        <header class="stick">
            <div class="topbar">
                <div class="container">
                    <?php if (!isset($_SESSION['customer'])): ?>
                        <div class="topbar-register">
                            <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                        </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['customer'])): ?>
                        <div class="topbar-register">
                            <a class="log-popup-bt" href="dashboard.php" title="dashboard" itemprop="url">DASHBOARD</a> / 
                            <a class="log-popup-bt" href="logout.php" title="Logout" itemprop="url">LOGOUT</a>
                        </div>
                    <?php endif ?>
                    
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="./" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="./" title="Homepage" itemprop="url"><span class="red-clr">Fumzy Foods</span>Homepage</a>
                                </li>
                                <li class="menu-item-has-children"><a href="products.php" title="Products" itemprop="url"><span class="red-clr">Real Foods</span>Products</a>
                                </li>
                                <li><a href="#" title="CONTACT US" itemprop="url"><span class="red-clr">REAL FOOD</span>CONTACT US</a></li>

                                <li><a href="cart.php" title="CART" itemprop="url"><span class="red-clr">cart</span><i class="fa fa-shopping-cart"></i><span class="p-2 badge badge-warning" id="cart_count"></span>  </a></li>
                            </ul>
                        </div>

                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header>


        <div class="responsive-header">
            <!-- <div class="responsive-topbar">
            </div> -->
            <div class="responsive-logomenu">
                <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a></h1></div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                    <ul>
                        <li class=""><a href="./" title="Homepage" itemprop="url"><span class="red-clr">Fumzy Foods</span>Homepage</a>
                        </li>
                        <li class=""><a href="products.php" title="Products" itemprop="url"><span class="red-clr">Real Foods</span>Products</a>
                        </li>
                        <li><a href="#" title="CONTACT US" itemprop="url"><span class="red-clr">REAL FOOD</span>CONTACT US</a></li>

                        <li><a href="cart.php" title="CART" itemprop="url"><span class="red-clr">cart</span><i class="fa fa-shopping-cart"></i><span class="p-2 badge badge-warning" id="cart_count_mobile"></span>  </a></li>
                    </ul>
                </div>
                <?php if (!isset($_SESSION['customer'])): ?>
                    <div class="topbar-register">
                        <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                    </div>
                <?php endif ?>
                <?php if (isset($_SESSION['customer'])): ?>
                    <div class="topbar-register">
                        <a class="log-popup-bt" href="dashboard.php" title="dashboard" itemprop="url">DASHBOARD</a> / 
                        <a class="log-popup-bt" href="logout.php" title="Logout" itemprop="url">LOGOUT</a>
                    </div>
                <?php endif ?>
                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->

