<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
    $id = $_GET['id'];
    if (!isset($id)) {
       header('location: food_packages.php');
    }
    include_once 'components/head.php';
    include_once '../core/food_packages.class.php';

    $food_package_obj = new Food_packages();

    $food_package = $food_package_obj->fetch_food_package($id);

    if (empty($food_package)) {
       header('location: food_packages.php');
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
                                <h4 class="mb-5">Update Food Package</h4>
                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Update Food Package</strong></p>
                                            <p class="text-muted">A Food Package is a fully packed meal with several food packages. Update the food package details now and later Update add food items into the food package.</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <form id="foodPackageForm" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <span id="messageArea"></span>
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $food_package['id'] ?>">
                                                <div class="form-group">
                                                    <label>Food Package Name</label>
                                                    <input type="text" autocomplete="false" value="<?php echo $food_package['package_name'] ?>" autofocus="true" class="form-control" name="package_name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" autocomplete="false" value="<?php echo $food_package['price'] ?>" class="form-control" name="price" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea rows="5" class="form-control" name="description" required=""><?php echo $food_package['description'] ?></textarea>
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
            url: 'actions/update_food_package.php',
            method: 'POST',
            data : $('#foodPackageForm').serialize(),
            success: function(data){
                if (data == 1) {
                    $('#foodPackageForm')[0].reset();
                    window.location.href= 'food_packages.php';
                }
                else{
                    $('#messageArea').html(data);
                }
            }
        })
    } );
</script>