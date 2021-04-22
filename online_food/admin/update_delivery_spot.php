<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    $id = $_GET['id'];
    if (!isset($id)) {
       header('location: delivery_spots.php');
    }
    include_once 'components/head.php';
    include_once '../core/delivery_spots.class.php';

    $delivery_spot_obj = new delivery_spots();

    $delivery_spot = $delivery_spot_obj->fetch_delivery_spot($id);

    if (empty($delivery_spot)) {
       header('location: delivery_spots.php');
    }

?>
<body class="layout-default">
    <div class="preloader"></div>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->
                    <?php include_once 'components/header.php'; ?>
                <!-- // END Header -->

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">




                    <div class="container-fluid page__container">
                        <div class="">
                            <div class="jumbotron">
                                <h4 class="mb-5">Update Delivery Spot</h4>
                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Update Delivery Spot</strong></p>
                                            <p class="text-muted">The delivery spots are usually notable and famous places in the school. Delivery would be made to customers at these spots. <br> <br> Please make sure esch delivery spot is unique</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <form id="deliverySpotForm">
                                                <div class="form-group">
                                                    <span id="messageArea"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Delivery Spot</label>
                                                    <input type="text" autocomplete="false" autofocus="true" class="form-control" name="delivery_spot" value="<?php echo $delivery_spot['delivery_spot'] ?>" required="">
                                                    <input type="hidden" name="id" value="<?php echo $delivery_spot['id'] ?>">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>                     
                    </div>



                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->
        <?php include_once 'components/sidebar.php'; ?>

        
    </div>
    <!-- // END drawer-layout -->


    <?php include_once 'components/script.php'; ?>
    </div>
</body>

</html>
<script>
    $('#deliverySpotForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'actions/update_delivery_spot.php',
            method: 'POST',
            data: $('#deliverySpotForm').serialize(),
            success: function(data){
                if (data == 1) {
                    $('#messageArea').html('<div class="alert alert-success">Successfully Upated</div>');
                    $('#deliverySpotForm')[0].reset();
                    window.location.href = 'delivery_spots.php';
                }
                else{
                    $('#messageArea').html(data);
                }
            }
        })
    } );
</script>