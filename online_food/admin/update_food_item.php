<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    $id = $_GET['id'];
    if (!isset($id)) {
       header('location: food_items.php');
    }
    include_once 'components/head.php';
    include_once '../core/food_items.class.php';

    $food_item_obj = new food_items();

    $food_item = $food_item_obj->fetch_food_item($id);

    if (empty($food_item)) {
       header('location: food_items.php');
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
                                <h4 class="mb-5">Update Food Item</h4>
                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Update Food Item</strong></p>
                                            <p class="text-muted">A Food Item is a particular part/item of a whole meal. Food items can later be added to food packages. <br> <br> Please make sure each food item is unique</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <form id="deliverySpotForm">
                                                <div class="form-group">
                                                    <span id="messageArea"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Food Item</label>
                                                    <input type="text" autocomplete="false" autofocus="true" class="form-control" name="food_item" value="<?php echo $food_item['food_item'] ?>" required="">
                                                    <input type="hidden" name="id" value="<?php echo $food_item['id'] ?>">
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
            url: 'actions/update_food_item.php',
            method: 'POST',
            data: $('#deliverySpotForm').serialize(),
            success: function(data){
                if (data == 1) {
                    $('#messageArea').html('<div class="alert alert-success">Successfully Upated</div>');
                    $('#deliverySpotForm')[0].reset();
                    window.location.href = 'food_items.php';
                }
                else{
                    $('#messageArea').html(data);
                }
            }
        })
    } );
</script>