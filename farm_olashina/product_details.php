<!DOCTYPE html>
<?php 
session_start();
if (!isset($_GET['id'])) {
    header('location: products.php');
}

$id = $_GET['id'];
include_once 'core/products.class.php';
$product_obj = new Products();
$product = $product_obj->fetch_product($id);


if (empty($product)) {
    header('location: products.php');
}
?>
<html lang="en">
<?php include_once 'components/head.php'; ?>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		
		<?php include_once 'components/header.php'; ?>
		<!-- main -->
		<main class="mt-5">
			<!-- introBannerHolder -->
		
			<!-- twoColumns -->
			<div class="twoColumns container pt-xl-23 pb-xl-20 pt-lg-20 pb-lg-20 py-md-16 py-10">
				<div class="row mb-6">
					<div class="col-12 col-lg-6 order-lg-1">
						<!-- productSliderImage -->
						<div class="productSliderImage mb-lg-0 mb-4">
							<div>
								<img src="products/<?php echo $product['product_image'] ?>" alt="image description" class="img-fluid w-100">
							</div>
							<!-- <div>
								<img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
							</div>
							<div>
								<img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
							</div>
							<div>
								<img src="http://placehold.it/570x635" alt="image description" class="img-fluid w-100">
							</div> -->
						</div>
					</div>
					<div class="col-12 col-lg-6 order-lg-3">
						<!-- productTextHolder -->
						<div class="productTextHolder overflow-hidden">
							<h2 class="fwEbold mb-2"><?php echo $product['product_name'] ?></h2>
							<ul class="list-unstyled ratingList d-flex flex-nowrap mb-2">
								<li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
								<li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
								<li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
								<li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
								<li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
								<li>( 5 customer reviews )</li>
							</ul>
							<strong class="price d-block mb-5 text-green">&#8358;<?php echo $product['price'] ?></strong>
							<p class="mb-5"><?php echo $product['description'] ?></p>
							<ul class="list-unstyled productInfoDetail mb-5 overflow-hidden">
								<li class="mb-2">Farmer Name: <span><?php echo $product['fullname'] ?></span></li>
							</ul>
							<div class="holder overflow-hidden d-flex flex-wrap mb-6">
								<input type="number" placeholder="1">
								<?php if (isset($_SESSION['farm_customer'])): ?>

								<span onclick="addToCart(<?php echo $product['id'] ?>)" class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4">Add To Cart <i class="fas fa-arrow-right ml-2"></i></span>
								<?php endif ?>

								<?php if (!isset($_SESSION['farm_customer'])): ?>
									<a href="auth.php" class="btn btn-dark d-block">Login/Register to continue</a>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- featureSec -->
			<section class="featureSec container overflow-hidden pt-xl-12 pb-xl-29 pt-lg-10 pb-lg-14 pt-md-8 pb-md-10 py-5">
				<div class="row">
					<!-- mainHeader -->
					<header class="col-12 mainHeader mb-5 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Products From the Same Farmer</h1>
					</header>
				</div>
				<div class="row">


					<?php foreach ($product_obj->fetch_farmer_products($product['farmer_id']) as $product): ?>
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