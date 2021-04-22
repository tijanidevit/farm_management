<?php 
session_start();
if (!isset($_SESSION['farm_customer'])) {
    header('location: ./');
}

include_once 'core/carts.class.php';
$cart_obj = new Carts();
$carts = $cart_obj->fetch_cart($_SESSION['farm_customer']['id']);

$subtotal = 0;
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		<?php include_once 'components/header.php'; ?>
		<main class="mt-5">
			<!-- cartHolder -->
			<div class="cartHolder container pt-xl-21 pb-xl-24 py-lg-20 py-md-16 py-10">
				<div class="row">
					<!-- table-responsive -->
					<div class="col-12 table-responsive mb-xl-22 mb-lg-20 mb-md-16 mb-10">
						<!-- cartTable -->
						<table class="table cartTable">
							<thead>
								<tr>
									<th scope="col" class="text-uppercase fwEbold border-top-0">product</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">price</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">cancel</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($carts as $cart): ?>
									<?php $subtotal += $cart['price'];?>
									<tr class="align-items-center">
										<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
											<!-- <div class="imgHolder">
												<img src="http://placehold.it/70x80" alt="image description" class="img-fluid">
											</div> -->
											<span class="title pl-2"><a href="product_details.php?id=<?php echo $cart['product_id'] ?>"><?php echo $cart['product_name'] ?></a></span>
										</td>
										<td class="fwEbold border-top-0 border-bottom px-0 py-6">&#8358;<?php echo $cart['price'] ?></td>
										<!-- <td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td> -->
										<td class="fwEbold border-top-0 border-bottom px-0 py-6"><a href="javascript:void(0);" class="fas fa-times" onclick="removeFromCart(<?php echo $cart['id'] ?>)"></a></td>
									</tr>
								<?php endforeach ?>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="d-flex justify-content-between">
							<strong class="txt fwEbold text-uppercase mb-1">subtotal</strong>
							<strong class="price fwEbold text-uppercase mb-1">&#8358; <span id="amountT"><?php echo $subtotal ?></span></strong>
						</div>

							<script src="https://js.paystack.co/v1/inline.js"></script>
							<button id="checkoutBtn" class="btn btnTheme w-100 fwEbold text-center text-white md-round py-3 px-4 py-md-3 px-md-4">Proceed to checkout</button>
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

	<script>
		
		function getCartCount() {
		    $.ajax({
		        url: 'php/get_cart_count.php',
		        type: 'post',
		        success: function(data) {
		            $('#cart_count').text(data);
		            $('#cart_count_mobile').text(data);
		        }
		    })
		}

		function removeFromCart(id) {
		    $.ajax({
		        url: 'php/remove_from_cart.php',
		        type: 'post',
		        data: {id:id},
		        success: function(data) {
		            window.location.href = 'cart-page.php';
		            console.log(data);
		        }
		    })
		}
		$(checkoutBtn).click(function(){
		    var myAmount = Number($('#amountT').text() * 100);
		    var myEmail = '<?php echo $_SESSION['farm_customer']['email'] ?>';
		    var user_id = '<?php echo $_SESSION['farm_customer']['id'] ?>';
		    var carts = '<?php echo json_encode($carts) ?>';

		    var handler = PaystackPop.setup({
		    key: 'pk_test_084fa7123ffb9f323b380dcdc88397b7f5bb4e5a',
		    email: myEmail,
		    amount: myAmount,
		    currency: "NGN",
		    ref: ''+Math.floor((Math.random() * 1000000000) + 1),
		    metadata: {
		        custom_fields: [
		            {
		              display_name: "Mobile Number",
		              variable_name: "mobile_number",
		              value: "+2348012345678"
		          }
		        ]
		    },
		    callback: function(response){
		        $.ajax({
		            url: 'php/checkout.php',
		            method: 'POST',
		            data: {carts: carts},
		            success: function(data){
		                if (data == 1) {
		                    window.location.href = 'orders.php';
		                }
		                else{
		                    console.log(data);
		                }
		            }
		        })            
		    },
		    onClose: function(){
		        alert('window closed');
		    }
		    });
		    handler.openIframe();
		})

		$(document).ready(function() {
		    getCartCount();
		})
	</script>
</body>
</html>