<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    include_once 'components/head.php';
    include_once '../core/food_items.class.php';

    $food_item_obj = new Food_items();

    $food_items = $food_item_obj->fetch_food_items();
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
                                <h4 class="mb-5">Food Items</h4>
                                <table id="example" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Food item</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($food_items as $food_item): ?>
                                            <tr>
                                                <td><?php echo $food_item['food_item'] ?></td>
                                                <td>
                                                    <a href="update_food_item.php?id=<?php echo $food_item['id'] ?>" class="btn btn-warning btn-sm"><span class="material-icons">edit</span> Update</a>

                                                    <a href="actions/delete_food_item.php?id=<?php echo $food_item['id'] ?>" class="btn btn-danger btn-sm"><span class="material-icons">delete</span> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>  
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Food item</th>
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