<?php 
session_start();
if (!isset($_SESSION['farmer'])) {
    header('location: ./');
}

if (!isset($_GET['id'])) {
    header('location: products_list.php');
}

$id = $_GET['id'];


include_once '../core/products.class.php';
$product_obj = new Products();

$product = $product_obj->fetch_product($id);

if (empty($product)) {
    header('location: products_list.php');
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<?php include_once 'components/head.php'; ?>
<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <?php include_once 'components/header.php'; ?>
    <?php include_once 'components/sidebar.php'; ?>

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
                        <div class="col-12 my-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-heading">
                                        <h2>View Product - <?php echo $product['product_name'] ?></h2>
                                    </div>
                                    <div class="card-item my-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-responsive img-fluid" src="../products/<?php echo $product['product_image'] ?>">
                                            </div>

                                            <div class="col-md-8">
                                                <table class="my-1" cellpadding="5">
                                                    <tr>
                                                        <th>Product Name: </th>
                                                        <td><?php echo $product['product_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Price: </th>
                                                        <td><?php echo $product['price'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Description: </th>
                                                        <td><?php echo $product['description'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status: </th>
                                                        <td>
                                                            <?php if ($product['status'] == 1): ?>
                                                                <span class="text-success">Available</span>
                                                            <?php endif ?>
                                                            <?php if ($product['status'] == 0): ?>
                                                                <span class="text-danger">Not Available</span>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

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