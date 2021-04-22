<header id="header" class="pt-lg-5 pt-md-3 pt-2 position-absolute w-100 pb-3" style="background-color: white;">
	<div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">
		<div class="col-6 col-sm-3 col-lg-2 order-sm-2 order-md-0 dis-none">
			<!-- langList -->
			<ul class="nav nav-tabs langList pt-xl-6 pt-lg-4 pt-3 border-bottom-0">
				<li>
					<a class="icon-menu" shape="" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false"></a>
					<div class="dropdown-menu pl-4 pr-4">
						<a class="dropdown-item" href="auth.php">Login</a>
						<a class="dropdown-item" href="auth.php">Registration</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="col-12 col-sm-6 col-lg-8 static-block">
			<!-- mainHolder -->
			<div class="mainHolder justify-content-center">
				<!-- pageNav1 -->
				<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav1 position-static">
					<button type="button" class="navbar-toggle collapsed position-relative mt-md-2" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse  navbar-collapse" id="navbarNav">
						<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
							<li class="nav-item active dropdown">
								<a class="dropdown-toggle d-block" href="./">home</a>
								
							</li>
							<li class="nav-item dropdown">
								<a class="dropdown-toggle d-block" href="shop.php">Shop</a>
							</li>
							<li class="nav-item">
								<a class="d-block " href="about-us.php">About</a>
							</li>
							<li class="nav-item">
								<a class="nLogo" href="./"><img src="images/logo.png" alt="Botanical" class="img-fluid"></a>
							</li>
								
							<li class="nav-item">
								<a class="d-block" href="farmer">Farmer Section</a>
							</li>

							<?php if (isset($_SESSION['farm_customer'])): ?>
								<li class="nav-item"><a class="nav-link position-relative icon-cart" href="cart-page.php"><span class="num rounded d-block" id="cart_count">0</span></a></li>
								<li class="nav-item">
									<a class="d-block" href="logout.php">Logout</a>
								</li>	
							<?php endif ?>
							<?php if (!isset($_SESSION['farm_customer'])): ?>
									<a class="d-block" href="auth.php">Register/Login</a>
								</li>	
							<?php endif ?>
						</ul>
					</div>
				</nav>
				<div class="logo">
					<a href="./"><img src="images/logo.png" alt="Botanical" class="img-fluid"></a>
				</div>
			</div>
		</div>
		<div class="col-6 col-sm-3 col-lg-2 order-sm-3 order-md-0 dis-none">
			<!-- wishList -->
			<!-- <ul class="nav nav-tabs wishList pt-xl-5 pt-lg-4 pt-3 mr-xl-3 mr-0 justify-content-end border-bottom-0">
				<li class="nav-item"><a class="nav-link position-relative icon-cart" href="cart-page.php"><span class="num rounded d-block" id="cart_count">0</span></a></li>
			</ul> -->
		</div>
	</div>
</header>