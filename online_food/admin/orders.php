<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    include_once 'components/head.php';
    include_once '../core/orders.class.php';

    $order_obj = new Orders();

    $orders = $order_obj->fetch_orders();
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
                                <h4 class="mb-5">Orders List</h4>
                                <table id="example" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Food Package</th>
                                            <th>Delivery Spot</th>
                                            <th>Ordered Date</th>
                                            <th>Delivery Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orders as $order): ?>
                                            <tr>
                                                <td><?php echo $order['fullname'] ?></td>
                                                <td><?php echo $order['food_packages'] ?></td>
                                                <td><?php echo $order['delivery_spot'] ?></td>
                                                <td><?php echo $order['order_date'] ?></td>
                                                <td><?php echo $order['delivery_time'] ?></td>
                                                <td>
                                                    <?php if ($order['status'] == 0): ?>
                                                        <span class="text-warning">Pending</span>
                                                        <span title="Mark as delivered"><a href="actions/confirm_delivery.php?id=<?php echo $order['id'] ?>" class="btn btn-sm btn-success material-icons">check</a></span>
                                                    <?php endif ?>
                                                    <?php if ($order['status'] == 1): ?>
                                                        <span class="text-success">Delivered</span>
                                                    <?php endif ?>
                                                        
                                                </td>
                                            </tr>
                                        <?php endforeach ?>  
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Food Package</th>
                                            <th>Delivery Spot</th>
                                            <th>Ordered Date</th>
                                            <th>Delivery Time</th>
                                            <th>Status</th>
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