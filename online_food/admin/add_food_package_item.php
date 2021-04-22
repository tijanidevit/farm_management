<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
    $id = $_GET['id'];
    if (!isset($id)) {
       header('location: food_packages.php');
    }
    include_once 'components/head.php';
    include_once '../core/food_packages.class.php';
    include_once '../core/food_items.class.php';

    $food_package_obj = new Food_packages();
    $food_item_obj = new Food_items();

    $food_package = $food_package_obj->fetch_food_package($id);
    $food_items = $food_item_obj->fetch_food_items();
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
                                <h4 class="mb-5">Add Food Package Item</h4>
                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Add Food Package Item</strong></p>
                                            <p class="text-muted">A Food Package is a fully packed meal with several food packages. Add food items into the food package now.</p>
                                        </div>
                                        <div class="col-lg-8 card-form__body card-body">
                                            <form id="foodPackageFormItem" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <span id="messageArea"></span>
                                                </div>
                                                <input type="hidden" name="food_package_id" value="<?php echo $food_package['id'] ?>">
                                                <div class="form-group">
                                                    <label>Food Package Name</label>
                                                    <input type="text" autocomplete="false" value="<?php echo $food_package['package_name'] ?>" readonly autofocus="true" class="form-control" name="package_name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Select food item to be added</label>
                                                    <select class="form-control" name="food_item_id" required="">
                                                        <?php foreach ($food_items as $food_item): ?>
                                                            <option value="<?php echo $food_item['id'] ?>"><?php echo $food_item['food_item'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> 


                                <div class="card card-form">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 card-body">
                                            <p><strong class="headings-color">Added Food Items</strong></p>
                                            <table class="table">
                                                <thead>
                                                    <th>Food Item</th>
                                                    <th>Action</th>
                                                </thead>

                                                <tbody id="foodPackageItemsTable">
                                                    
                                                </tbody>
                                                
                                            </table>
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
    var id = ''+<?php echo $id ?>;
    $(document).ready(function() {
        fetchFoodPackageItems(id);
    })
    $('#foodPackageFormItem').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'actions/add_food_package_item.php',
            method: 'POST',
            data : $('#foodPackageFormItem').serialize(),
            success: function(data){
                if (data == 1) {
                    fetchFoodPackageItems(id);
                }
                else{
                    $('#messageArea').html(data);
                }
            }
        })
    } );

    function fetchFoodPackageItems(id) {
        $.ajax({
            url: 'actions/fetch_food_package_items.php',
            method: 'POST',
            data : {id:id},
            success: function(data){
                $('#foodPackageItemsTable').html(data);
            }
        })
    }
</script>