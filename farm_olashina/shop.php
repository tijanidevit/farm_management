<!DOCTYPE html>
<html lang="en">
<?php
	session_start(); 
	include_once 'components/head.php';
    include_once 'core/products.class.php';

    $product_obj = new Products();

    $products = $product_obj->fetch_products();
?>
<?php include_once 'components/head.php'; ?>

<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		<?php include_once 'components/header.php'; ?>
		<!-- main -->
		<main class="mt-5">
			<!-- twoColumns -->
			<div class="twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4">
				<div class="row">
					<div class="col-12 col-lg-12 order-lg-3">
						<!-- content -->
						<article id="content">
							<!-- show-head -->
							<div class="row">
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
								
								
								
								
								
								<!-- <div class="col-12 pt-3 mb-lg-0 mb-md-6 mb-3">
									<ul class="list-unstyled pagination d-flex justify-content-center align-items-end">
										<li><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
										<li class="active"><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);">2</a></li>
										<li>...</li>
										<li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
									</ul>
								</div> -->
							</div>
						</article>
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