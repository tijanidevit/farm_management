<?php 
    session_start();
    if (!isset($_SESSION['farmer'])) {
        header('location: ./');
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
                                        <h2>Add New Product</h2>
                                    </div>
                                    <div class="card-item my-5">
                                        <form method="post" id="addProductForm" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input class="form-control" type="text" name="product_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input class="form-control" type="number" name="price">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="5" name="description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Product Image</label>
                                                <input class="form-control" type="file" accept="image/*" name="product_image">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-dark">Add Product</button>
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