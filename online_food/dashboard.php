<!DOCTYPE html>
<html lang="en">

<?php 
  include_once 'components/head.php';


  if (!isset($_SESSION['customer_id'])) {
    header('location: auth.php');
  }
  include_once 'core/orders.class.php';
  include_once 'core/customers.class.php';
  $customer_obj = new Customers();
  $customer = $customer_obj->fetch_customer($customer_id);

  $order_obj = new Orders();
  $orders = $order_obj->fetch_customer_orders($customer_id);
?>
<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "components/header.php"; ?>


        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Dashboard</h1>
                                <span>Your profile and recent orders</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="dashboard-tabs-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                                <div class="profile-sidebar-inner brd-rd5">
                                                    <div class="user-info red-bg">
                                                        <img class="brd-rd50" src="images/customers/<?php echo $customer['image'] ?>" alt="user-avatar.jpg" itemprop="image">
                                                        <div class="user-info-inner">
                                                            <h5 itemprop="headline"><a href="#" title="" itemprop="url"><?php echo $customer['fullname'] ?></a></h5>
                                                            <span><a href="#" title="" itemprop="url"><span class="__cf_email__"><?php echo $customer['phone'] ?></span></a></span>
                                                            <a class="brd-rd3 sign-out-btn yellow-bg" href="logout.php" title="" itemprop="url"><i class="fa fa-sign-out"></i> LOG OUT</a>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li><a href="#my-orders" data-toggle="tab"><i class="fa fa-shopping-basket"></i> MY ORDERS</a></li>
                                                        <!-- <li><a href="#account-settings" data-toggle="tab"><i class="fa fa-cog"></i> ACCOUNT SETTINGS</a></li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-lg-8">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="my-orders">
                                                    <div class="tabs-wrp brd-rd5">
                                                        <h4 itemprop="headline">MY ORDERS</h4>
                                                        <div class="order-list">
                                                            <?php foreach ($orders as $order): ?>
                                                                <div class="order-item brd-rd5">
                                                                    <div class="order-info">
                                                                        <span class="red-clr"><?php echo $order['delivery_time'].',  ' .$order['order_date'] ?></span>
                                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url"><?php echo $order['delivery_spot'] ?></a></h4>
                                                                        
                                                                        <span class="price"><?php echo $order['food_packages'] ?></span>
                                                                        <?php if ($order['status'] == 1): ?>
                                                                           <span class="processing brd-rd3">Delivered</span>
                                                                        <?php else: ?>
                                                                            <span class="processing text-warning bg-dark">Pending</span>
                                                                        <?php endif ?>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach ?>
                                                        </div>
                                                        <!-- <div class="pagination-wrapper text-center style2">
                                                            <ul class="pagination justify-content-center">
                                                                <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                                <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                                <li class="page-item">........</li>
                                                                <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                                <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                            </ul>
                                                        </div> -->
                                                        <!-- Pagination Wrapper -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-settings">
                                                    <div class="tabs-wrp account-settings brd-rd5">
                                                        <h4 itemprop="headline">ACCOUNT SETTINGS</h4>
                                                        <div class="account-settings-inner">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                                    <div class="profile-info text-center">
                                                                        <div class="profile-thumb brd-rd50">
                                                                            <img id="profile-display" src="assets/images/resource/profile-img1.jpg" alt="profile-img1.jpg" itemprop="image">
                                                                        </div>
                                                                        <a class="red-clr change-password" href="#" title="" itemprop="url">Change Password</a>
                                                                        <div class="profile-img-upload-btn">
                                                                            <label class="fileContainer brd-rd5 yellow-bg">
                                                                                UPLOAD PICTURE
                                                                                <input id="profile-upload" type="file"/>
                                                                            </label>
                                                                        </div>
                                                                        <p itemprop="description">Upload a profile picture or choose one of the following</p>
                                                                        <div class="default-img-lst">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb1.jpg" alt="profile-thumb1.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb2.jpg" alt="profile-thumb2.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb3.jpg" alt="profile-thumb3.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb4.jpg" alt="profile-thumb4.jpg" itemprop="image">
                                                                            <img class="brd-rd50" src="assets/images/resource/profile-thumb5.jpg" alt="profile-thumb5.jpg" itemprop="image">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                                    <div class="profile-info-form-wrap">
                                                                        <form class="profile-info-form">
                                                                            <div class="row mrg20">
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Complete Name <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Name">
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Email Address <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="email" placeholder="Enter Your Email Address">
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Phone No <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text" placeholder="Enter Your Phone No">
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                    <label>Country <sup>*</sup></label>
                                                                                    <div class="select-wrp">
                                                                                        <select>
                                                                                            <option>Pakistan</option>
                                                                                            <option>India</option>
                                                                                            <option>USA</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>State <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>City <sup>*</sup></label>
                                                                                    <div class="select-wrp">
                                                                                        <select>
                                                                                            <option>Karachi</option>
                                                                                            <option>Multan</option>
                                                                                            <option>Lahore</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Latitude <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                    <label>Longitude <sup>*</sup></label>
                                                                                    <input class="brd-rd3" type="text">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="loc-map2">
                                                                        <div class="loc-map brd-rd3" id="loc-map"></div>
                                                                        
                                                                        <div class="loc-srch">
                                                                            <input class="brd-rd3" type="text" placeholder="Type Your Address">
                                                                            <button class="brd-rd3 red-bg" type="submit">Search Now</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Section Box -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include "components/footer.php"; ?>
    </main><!-- Main Wrapper -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="ajax/app.js"></script>
</body>

</html>