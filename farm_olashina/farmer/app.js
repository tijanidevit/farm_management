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

$('#updateProductForm').submit(function(e) {
    $('#messageArea').fadeOut();
    e.preventDefault();
    $.ajax({
        url:'php/update_product.php',
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