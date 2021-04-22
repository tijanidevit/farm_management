<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    include_once 'components/head.php';
    include_once '../core/food_packages.class.php';

    $food_package_obj = new Food_packages();

    $food_packages = $food_package_obj->fetch_food_packages();
?>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-5">Food Packages List</h4>
                                <table id="example" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Food Package</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($food_packages as $food_package): ?>
                                            <tr>
                                                <td><?php echo $food_package['package_name'] ?></td>
                                                <td>&#8358;<?php echo $food_package['price'] ?></td>
                                                <td>
                                                    <!-- <a href="view_food_package.php?id=<?php echo $food_package['id'] ?>" class="btn btn-info btn-sm"><span class="material-icons">remove_red_eye</span> View</a> -->

                                                    <a href="update_food_package.php?id=<?php echo $food_package['id'] ?>" class="btn btn-warning btn-sm"><span class="material-icons">edit</span> Update</a>

                                                    <a href="delete_food_package.php?id=<?php echo $food_package['id'] ?>" class="btn btn-danger btn-sm"><span class="material-icons">delete</span> Delete</a>

                                                    <a href="add_food_package_item.php?id=<?php echo $food_package['id'] ?>" class="btn btn-success btn-sm"><span class="material-icons">add</span> Add food item</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>  
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Food Package</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>