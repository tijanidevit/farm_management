<?php 
    session_start();
    if (!isset($_SESSION['farmer'])) {
        header('location: ./');
    }

    include_once '../core/products.class.php';

    $product_obj = new Products();
    $farmer_id = $_SESSION['farmer']['id'];

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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading">
                                        <h2>Products List</h2>
                                    </div>
                                    <div class="card-item my-5">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Product name</th>
                                                        <th>Price</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php foreach ($products as $product): ?>
                                                        <tr>
                                                            <td><?php echo $product['product_name'] ?></td>
                                                            <td>&#8358;<?php echo $product['price'] ?></td>
                                                            <td><?php echo substr($product['description'], 0,70) ?>....</td>
                                                            <td>
                                                                <?php if ($product['status'] == 1): ?>
                                                                    <span class="text-success">Available</span>
                                                                <?php endif ?>
                                                                <?php if ($product['status'] == 0): ?>
                                                                    <span class="text-danger">Not Available</span>
                                                                <?php endif ?>
                                                            </td>
                                                            <td>
                                                                <a href="view_product.php?id=<?php echo $product['id'] ?>" class="btn btn-sm text-white btn-info">View</a> 
                                                                <a href="update_product.php?id=<?php echo $product['id'] ?>" class="btn btn-sm text-white btn-warning">Update</a> 
                                                                <a href="php/delete_product.php?id=<?php echo $product['id'] ?>" class="btn btn-sm text-white btn-danger">Delete</a> 
                                                            </td>
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

<script>
    $(document).ready(function () {
        $('.table').dataTable();
    })
</script>