<?php 
    include_once '../core/orders.class.php';
    include_once '../core/customers.class.php';
    $order_obj = new Orders();
    $customer_obj = new Customers();

    $delivered_orders = $order_obj->fetch_delivered_orders();
    $undelivered_orders = $order_obj->fetch_undelivered_orders();
    $customers_num = $customer_obj->customers_num();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include_once 'components/head.php'; ?>
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

                        <div class="row">
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Customers</div>
                                        <?php echo $customers_num ?>
                                    </div>
                                    <div class="position-relative d-flex align-items-start z-0">
                                        <div class="progress flex" style="height: 4px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Delivered Orders</div>
                                        <?php echo count($undelivered_orders) ?>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Undelivered Orders</div>
                                        <strong class="text-primary"><?php echo count($delivered_orders) ?></strong>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row card-group-row">
                            <div class="col-lg-6 ">

                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Pending Deliveries</h4>
                                    </div>
                                    <div class="list-group tab-content list-group-flush">
                                        <div class="tab-pane active show fade" id="orders_all">
                                            <?php foreach ($undelivered_orders as $undelivered_order): ?>
                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle  bg-primary">
                                                            <i class="material-icons">monetization_on</i>
                                                        </span>
                                                    </div>


                                                    <div class="flex">
                                                        <div class="d-flex align-items-middle">
                                                            <div class="avatar avatar-xxs mr-1">
                                                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>


                                                            <strong class="text-15pt mr-1">Jenell D. Matney</strong>
                                                        </div>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div>$573</div>


                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </div>
                                            <?php endforeach ?>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Delivered Orders</h4>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <?php foreach ($delivered_orders as $delivered_order): ?>
                                            <div class="list-group-item list-group-item-action d-flex align-items-center">
                                                <div class="avatar avatar-sm mr-3">
                                                    <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>

                                                <div class="d-flex flex-column flex">
                                                    <strong class="text-15pt">Jenell D. Matney</strong>
                                                    <small class="text-muted">28 February 2019, 10:00 AM</small>
                                                </div>

                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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