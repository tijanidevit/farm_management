 <script>
        $(function() {
            var qty = 1;
            var price = Number(''+<?php echo $food_package['price'] ?>);
            var totalPrice = price;
            $('#change-qty').change(function() {
                qty = $(this).val();
                $('#qty-span').text(qty);
                totalPrice = qty * price;
                $('.total-price').text(totalPrice);
            })

            "use strict";

            var testOrder = [];
            $('#pay-btn').click(function(e) {
                e.preventDefault();

                var customer_email = $('#customer-email').val();
                var customer_phone = $('#customer-phone').val();
                var customer_fullname = $('#customer-name').val();
                var customer_address = $('#customer-address').val();
                var customer_description = $('#order-note').val();
                var trxref = "200723160151";

                var handler = PaystackPop.setup({
                    key: 'pk_live_ac7c6db3d0622d3647d3bf03e29c25a8487e5072',
                    email: customer_email,
                    amount: (totalPrice * 100),
                    currency: "NGN",
                    ref: "200723160151",
                    metadata: {
                        custom_fields: [{
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: customer_phone
                        }]
                    },
                    callback: function(response) {
                        let resp = {
                            response: response.reference,
                            message: response.message,
                            trxref: response.trxref,
                            amount: totalPrice,
                            foodId: "7",
                            customer_email,
                            customer_phone,
                            customer_fullname,
                            customer_description,
                            customer_address
                        }
                        $.ajax({
                            url: 'order-item.php',
                            type: 'POST',
                            data: resp,
                            success: function(success) {
                             console.log(success);
                             if (success == true) {
                                $('#user-phone').text(customer_phone);
                                $('html').addClass('thanks-message-popup-active');
                            } else {
                                alert("Opps! An error has occured. Please contact our support centre.");

                            }
                        },
                        error: function(err) {
                            alert("Opps! An error has occured. Please contact our support centre.");
                            console.log(err);

                        }
                    })
                    },
                    onClose: function() {
                        alert('window closed');
                    }
                });
                handler.openIframe();
            });
        })
    </script>
