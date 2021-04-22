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
                                        <h2>Update Product - <?php echo $product['product_name'] ?></h2>
                                    </div>
                                    <div class="card-item my-5">
                                        <form method="post" id="updateProductForm" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input class="form-control" required value="<?php echo $product['product_name'] ?>" type="text" name="product_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input class="form-control" required value="<?php echo $product['price'] ?>" type="number" name="price">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" required rows="5" name="description"><?php echo $product['description'] ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" required name="status">
                                                    <option value="<?php echo $product['status'] ?>">
                                                        <?php if ($product['status'] == 1): ?>
                                                            Available
                                                        <?php endif ?>
                                                        <?php if ($product['status'] == 0): ?>
                                                            >Not Available
                                                        <?php endif ?>
                                                    </option>
                                                    <option value="1">Available</option>
                                                    <option value="0">Not Available</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Product Image</label>
                                                <input class="form-control" type="file" accept="image/*" name="product_image">
                                                <input type="hidden" value="<?php echo $product['product_image'] ?>" name="pimg">
                                                <input type="hidden" value="<?php echo $product['id'] ?>" name="id">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-dark">Update Product</button>
                                            </div>
                                            <div id="messageArea"></div>
                                        </form>
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