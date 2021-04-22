<!DOCTYPE html>
<html lang="en">
<?php
	session_start(); 
	include_once 'components/head.php';
    include_once 'core/products.class.php';

    $product_obj = new Products();

    $products = $product_obj->fetch_products();
?>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageHeader -->
		<?php include_once 'components/header.php'; ?>
		<!-- main -->
		<main>
			<!-- introBlock -->
			<section class="introBlock position-relative">
				<div class="slick-fade">
					<div>
						<div class="align w-100 d-flex text-white align-items-center bgCover" style="background-image: url(images/farm.jpg);">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10  text-white">
											<h1 class="fwEbold position-relative  text-white pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Farm Products <span class="text-break d-block">The Perfect Choice.</span></h1>
											<p class="mb-xl-15 mb-lg-10  text-white">Quick and seemless delivery and best products <br>we offer the best.</p>
											<a href="products.php" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- featureSec -->
			<section class="featureSec container-fluid overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-4">Farm Products</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
					<p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
				</header>
				<div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
					<!-- featureCol -->

					<?php foreach ($products as $product): ?>
						<div class="featureCol px-3 mb-6">
							<div class="border">
								<div class="imgHolder position-relative w-100 overflow-hidden">
									<img style="max-width: 320; max-height: 355;min-width: 320; min-height: 355;" src="products/<?php echo $product['product_image'] ?>" alt="image description" class="img-fluid w-100">
								</div>
								<div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
									<span class="title d-block mb-2"><a href="product_details.php?id=<?php echo $product['id'] ?>"><?php echo $product['product_name'] ?></a></span>
									<span class="price d-block fwEbold">&#8358;<?php echo $product['price'] ?></span>
									<span class="d-block my-1">
										<?php if (isset($_SESSION['farm_customer'])): ?>
												<span onclick="addToCart(<?php echo $product['id'] ?>)" class="icon-cart btn btn-info"> Add to cart</span>
											<?php endif ?>

											<?php if (!isset($_SESSION['farm_customer'])): ?>
												<a href="auth.php" class="btn btn-dark d-block">Login/Register to continue</a>
											<?php endif ?>
									</span>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			</section>
			<!-- contactListBlock -->
			<div class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-van"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
								<p class="m-0">On orders over  $100</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-gift"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
								<p class="m-0">The perfect gift idea</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
							<span class="icon icon-recycle"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
								<p class="m-0">Free return within 3 days</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-call"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
								<p class="m-0">Customer support</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footerHolder -->

		<?php include_once 'components/aside_footer.php'; ?>
	</main>
	<!-- footer -->

	<?php include_once 'components/footer.php'; ?>
</div>
<!-- include jQuery library -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- include bootstrap popper JavaScript -->
<script src="js/popper.min.js"></script>
<!-- include bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- include custom JavaScript -->
<script src="js/jqueryCustome.js"></script>
<script src="app.js"></script>
</body>
</html>