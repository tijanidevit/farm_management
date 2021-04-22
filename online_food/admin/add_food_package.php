<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    include_once 'components/head.php';
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
                                <h4 class="mb-5">Add Food Package</h4>
                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Add Food Package</strong></p>
                                            <p class="text-muted">A Food Package is a fully packed meal with several food items. Add the food package details now and later add food items into the food package.</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <form id="foodPackageForm" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <span id="messageArea"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Food Package Name</label>
                                                    <input type="text" autocomplete="false" autofocus="true" class="form-control" name="package_name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Food Package Image</label>
                                                    <input type="file" accept="image/*" class="form-control" name="package_image" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" autocomplete="false" class="form-control" name="price" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea rows="5" class="form-control" name="description" required=""></textarea>
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
    $('#foodPackageForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'actions/add_food_package.php',
            method: 'POST',
            data : new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data){
                if (data == 1) {
                    $('#messageArea').html('<div class="alert alert-success">Successfully Added</div>');
                    $('#foodPackageForm')[0].reset();
                }
                else{
                    $('#messageArea').html(data);
                }
            }
        })
    } );
</script>