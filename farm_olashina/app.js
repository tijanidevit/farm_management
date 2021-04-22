$('#registerForm').submit(function(e) {
	$('#messageArea').fadeOut();
	e.preventDefault();
	$.ajax({
        url:'php/register.php',
        type: 'POST',
        data : $('#registerForm').serialize(),
        beforeSend: function(){
        	$('#messageArea').text('Loading');
        },
        success: function(data){
            if (data == 1) {
            	window.location.href = 'dashboard.php';
            }
            else{
            	$('#messageArea').html(data);
            }
        }
    })
    $('#messageArea').fadeIn();
});

$('#loginForm').submit(function(e) {
	$('#messageArea').fadeOut();
	e.preventDefault();
	$.ajax({
        url:'php/login.php',
        type: 'POST',
        data : $('#loginForm').serialize(),
        beforeSend: function(){
        	$('#messageArea').text('Loading');
        },
        success: function(data){
            if (data == 1) {
            	window.location.href = 'dashboard.php';
            }
            else{
            	$('#messageArea').html(data);
            }
        }
    })
    $('#messageArea').fadeIn();
});

$('#addProductForm').submit(function(e) {
	$('#messageArea').fadeOut();
	e.preventDefault();
	$.ajax({
        url:'php/add_product.php',
        type: 'POST',
        data : new FormData(this),
        contentType: false,
        processData: false,
        cache: false,
        beforeSend: function(){
        	$('#messageArea').text('Loading');
        },
        success: function(data){
            if (data == 1) {
            	window.location.href = 'products_list.php';
            }
            else{
            	$('#messageArea').html(data);
            }
        }
    })
    $('#messageArea').fadeIn();
});


function addToCart(id){
    var id = id;
    $.ajax({
        url:'php/add_to_cart.php',
        type: 'POST',
        data : {id:id},
        success: function(data){
            getCartCount();
            alert(data);
        }
    })
}

        
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

$(document).ready(function() {
    getCartCount();
})

function removeFromCart(id) {
    $.ajax({
        url: 'php/remove_from_cart.php',
        type: 'post',
        data: {id:id},
        success: function(data) {
            window.location.href = 'cart.php';
            console.log(data);
        }
    })
}

// $('#checkoutForm').submit(function(e){
//     e.preventDefault();
//     var myAmount = Number($('#amount').text() * 100);
//     var myEmail = 'thenewxpat@gmail.com';
//     var user_id = '<?php echo $customer_id ?>';

//     var handler = PaystackPop.setup({
//     key: 'pk_test_084fa7123ffb9f323b380dcdc88397b7f5bb4e5a',
//     email: myEmail,
//     amount: myAmount,
//     currency: "NGN",
//     ref: ''+Math.floor((Math.random() * 1000000000) + 1),
//     metadata: {
//         custom_fields: [
//             {
//               display_name: "Mobile Number",
//               variable_name: "mobile_number",
//               value: "+2348012345678"
//           }
//         ]
//     },
//     callback: function(response){
//         alert("Savings Done Successful");
//         $.ajax({
//             url: 'php/checkout.php',
//             method: 'POST',
//             data: $('#checkoutForm').serialize(),
//             success: function(data){
//                 if (data == 1) {
//                     $('#checkoutForm')[0].reset();
//                     window.location.href = './success.php';
//                 }
//                 else{
//                     $('#message').html(data);
//                 }
//             }
//         })            
//     },
//     onClose: function(){
//         alert('window closed');
//     }
//     });
//     handler.openIframe();
// })


        // $('checkoutForm').submit(function(e){
        //     e.preventDefault();
        //     var myAmount = 2000 * 100;
        //     var myEmail = 'thenewxpat@gmail.com';

        //     var handler = PaystackPop.setup({
        //     key: 'pk_test_084fa7123ffb9f323b380dcdc88397b7f5bb4e5a',
        //     email: myEmail,
        //     amount: myAmount,
        //     currency: "NGN",
        //     ref: ''+Math.floor((Math.random() * 1000000000) + 1),
        //     metadata: {
        //         custom_fields: [
        //             {
        //               display_name: "Mobile Number",
        //               variable_name: "mobile_number",
        //               value: "+2348012345678"
        //           }
        //         ]
        //     },
        //     callback: function(response){
        //         alert("Savings Done Successful");
        //         $.ajax({
        //             url: 'php/checkout.php',
        //             method: 'POST',
        //             data: $('#checkoutForm').serialize(),
        //             success: function(data){
        //                 if (data == 1) {
        //                     window.location.href = './orders.php';
        //                 }
        //                 else{
        //                     $('#message').html(data);
        //                 }
        //             }
        //         })            
        //     },
        //     onClose: function(){
        //         alert('window closed');
        //     }
        //     });
        //     handler.openIframe();
        // })


        // $('checkoutBtn').click(function(){
        //     var myAmount = 2000 * 100;
        //     var myEmail = 'thenewxpat@gmail.com';

        //     var handler = PaystackPop.setup({
        //     key: 'pk_test_084fa7123ffb9f323b380dcdc88397b7f5bb4e5a',
        //     email: myEmail,
        //     amount: myAmount,
        //     currency: "NGN",
        //     ref: ''+Math.floor((Math.random() * 1000000000) + 1),
        //     metadata: {
        //         custom_fields: [
        //             {
        //               display_name: "Mobile Number",
        //               variable_name: "mobile_number",
        //               value: "+2348012345678"
        //           }
        //         ]
        //     },
        //     callback: function(response){
        //         alert("Savings Done Successful");
        //         $.ajax({
        //             url: 'php/checkout.php',
        //             method: 'POST',
        //             data: {cart: '<?php echo json_encode($carts) ?>'},
        //             success: function(data){
        //                 if (data == 1) {
        //                     window.location.href = './orders.php';
        //                 }
        //                 else{
        //                     $('#message').html(data);
        //                 }
        //             }
        //         })            
        //     },
        //     onClose: function(){
        //         alert('window closed');
        //     }
        //     });
        //     handler.openIframe();
        // })