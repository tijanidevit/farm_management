<!DOCTYPE html>
<html lang="en">
<?php 
if (!session_start()) {
	session_start();
}
	
 	include_once 'components/head.php';
    include_once 'core/products.class.php';

    if (isset($_SESSION['farm_customer'])) {
    	header('location: shop.php');
    }

    if (isset($_POST['loginBtn'])) {
    	require_once 'php/login.php';
    }

    if (isset($_POST['registerBtn'])) {
    	require_once 'php/register.php';
    }

    function old($name)
    {
    	if (isset($_POST[$name])) {
    		return $_POST[$name];
    	}
    }
?>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageHeader -->
		<?php include_once 'components/header.php'; ?>
		<!-- main -->
		<main class="my-5">
			<!-- featureSec -->
			<section class="featureSec my-5 container-fluid overflow-hidden pt-xl-12 pt-lg-10 pt-md-80 pt-5 pb-xl-10 pb-lg-4 pb-md-2 px-xl-14 px-lg-7">
				<!-- mainHeader -->
				<div style="margin-top: 50px"></div>
				<header class="col-12 my-5 mainHeader mb-7 text-center">
					<h1 class="headingIV my-5 playfair fwEblod mb-4">Authentication Page</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
					<p>Log in or register and start buying your favourite farm products.</p>
				</header>
				<div class="">
					<div class="row">
						<div class="col-12">
							<?php if (isset($err)): ?>
								<div class="alert alert-danger"><?php echo $err ?></div>
							<?php endif ?>
						</div>	
						<div class="col-md-6">
							
							<div class="card">
								<div class="card-heading text-center"><h1 class="headingVI my-5 playfair fwEblod mb-4">Login Here</h1></div>
								<div class="card-body">
									<form method="post">
										<div class="form-group">
											<label>Email</label>
											<input type="email"value="<?php echo old('email') ?>" name="email" required="" class="form-control bg-white" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" required="" class="form-control bg-white" />
										</div>

										<div class="form-group">
											<button name="loginBtn" class="btn btn-dark">Login</button>
										</div>
									</form>
								</div>
							</div>
						</div>


						<div class="col-md-6">
							
							<div class="card">
								<div class="card-heading text-center"><h1 class="headingVI my-5 playfair fwEblod mb-4">Register Here</h1></div>
								<div class="card-body">
									<form method="post">
										<div class="form-group">
											<label>Fullname</label>
											<input type="text" name="fullname" value="<?php echo old('fullname') ?>" required="" class="form-control bg-white" />
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="Remail" value="<?php echo old('Remail') ?>" required="" class="form-control bg-white" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" name="password" required="" class="form-control bg-white" />
										</div>

										<div class="form-group">
											<label>Address</label>
											<input type="text" name="address" value="<?php echo old('password') ?>" required="" class="form-control bg-white" />
										</div>

										<div class="form-group">
											<button name="registerBtn" class="btn btn-dark">Register</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</section>
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
</body>
</html>