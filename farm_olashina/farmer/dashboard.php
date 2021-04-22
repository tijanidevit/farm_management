<?php 
    session_start();
    if (!isset($_SESSION['farmer'])) {
        header('location: ./');
    }

    include_once '../core/orders.class.php';
    include_once '../core/products.class.php';

    $order_obj = new Orders();
    $product_obj = new Products();
    $farmer_id = $_SESSION['farmer']['id'];

    $orders = $order_obj->fetch_farmer_orders($farmer_id);
    $products = $product_obj->fetch_farmer_products($farmer_id);
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<?php include_once 'components/head.php'; ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <?php include_once 'components/header.php'; ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include_once 'components/sidebar.php'; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">

                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-item my-0">
                                        Total Orders <span class="float-right"><?php echo count($orders) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-item my-0">
                                        Total Products <span class="float-right"><?php echo count($products) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading">
                                        <h2>Orders List</h2>
                                    </div>
                                    <div class="card-item my-5">
                                        
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Product name</th>
                                                        <th>Customer</th>
                                                        <th>Total Price</th>
                                                        <th>Quantity</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php foreach ($orders as $order): ?>
                                                        <tr>
                                                            <td><?php echo $order['product_name'] ?></td>
                                                            <td><?php echo $order['fullname'] ?> - <?php echo $order['address'] ?></td>
                                                            <td>&#8358;<?php echo $order['price'] * $order['quantity'] ?></td>
                                                            <td><?php echo $order['quantity'] ?></td>
                                                            
                                                            <?php if ($order['status'] == 1): ?>
                                                                <td>
                                                                    <span class="text-success">Delivered</span>
                                                                </td>
                                                                <td>...</td>
                                                            <?php endif ?>
                                                            <?php if ($order['status'] == 0): ?>
                                                                <td>
                                                                    <span class="text-danger">Pending</span>
                                                                </td>
                                                                <td>
                                                                    
                                                                <a href="php/update_delivery.php?id=<?php echo $order['id'] ?>" class="btn btn-sm text-white btn-success">Set as delivered</a> 

                                                                </td>
                                                            <?php endif ?>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include_once 'components/footer.php'; ?>
    <!-- END: Footer-->

    <?php include_once 'components/script.php'; ?>
    

</body>
<!-- END: Body-->

</html>