function addToCart(customer_id,food_package_id,quantity){
	$.ajax({
		url: 'actions/add_to_cart.php',
		type: 'post',
		data: {customer_id:customer_id,food_package_id:food_package_id,quantity:quantity},
		success: function(data) {
			$('#message').html(data);
            getCartCount();
			alert(data);
		}
	})
}
function getCartCount() {
    $.ajax({
        url: 'actions/get_cart_count.php',
        type: 'post',
        success: function(data) {
            $('#cart_count').text(data);
            $('#cart_count_mobile').text(data);
        }
    })
}

function removeFromCart(id) {
    $.ajax({
        url: 'actions/remove_from_cart.php',
        type: 'post',
        data: {id:id},
        success: function(data) {
            window.location.href = 'cart.php';
            console.log(data);
        }
    })
}

$('#registerForm').submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: 'actions/register.php',
        method: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        cache: false,
        success: function(data){
            if (data == 1) {
                $('#registerForm')[0].reset();
                location.reload();
            }
            else{
                $('#registerMessage').html(data);
            }
        }
    })
});

$('#loginForm').submit(function(e) {
    e.preventDefault();
    $('#loginMessage').fadeOut();
    $.ajax({
        url: 'actions/login.php',
        method: 'POST',
        data: $('#loginForm').serialize(),
        success: function(data){
            if (data == 1) {
                $('#loginForm')[0].reset();
                location.reload();
            }
            else{
                $('#loginMessage').fadeIn();
                $('#loginMessage').html(data);
            }
        }
    })
});


$('#checkoutForm').submit(function(e){
    e.preventDefault();
    var myAmount = Number($('#amount').text() * 100);
    var myEmail = 'thenewxpat@gmail.com';
    var user_id = '<?php echo $customer_id ?>';

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
        alert("Savings Done Successful");
        $.ajax({
            url: 'actions/checkout.php',
            method: 'POST',
            data: $('#checkoutForm').serialize(),
            success: function(data){
                if (data == 1) {
                    $('#checkoutForm')[0].reset();
                    window.location.href = './success.php';
                }
                else{
                    $('#message').html(data);
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