<!DOCTYPE html>
<html lang="en">
<?php 
  include_once 'components/head.php';


  if (!isset($_SESSION['customer_id'])) {
    header('location: login.php');
  }
  include_once 'core/orders.class.php';

  $order_obj = new Orders();

  $orders = $order_obj->fetch_customer_orders($customer_id);
?>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<body >
<!-- Loader
    ============================================= -->
<div id="loader">
  <div class="loader-item"> <img src="img/logo_intro.png" alt="">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
</div>
<!-- Document Wrapper
    ============================================= -->
<div id="wrapper">
  <!-- banner 
    ============================================= -->
  <section class="banner dark" >
    <div id="myccount-parallax">
      <div class="bcg background1"
                data-center="background-position: 50% 0px;"
                data-bottom-top="background-position: 50% 100px;"
                data-top-bottom="background-position: 50% -100px;"
                data-anchor-target="#myccount-parallax"
              >
        <div class="bg-transparent">
          <div class="banner-content">
            <div class="container" >
              <div class="slider-content  "> <i class="icon-home-ico"></i>
                <h1>My Account</h1>
                <p>Every Thing You Know About Majesty</p>
                <ol class="breadcrumb">
                  <li><a href="./">Home</a></li>
                  <li>My Account</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- End Banner content -->
        </div>
        <!-- End bg trnsparent -->
      </div>
    </div>
    <!-- Service parallax -->
  </section>
  <!-- End Banner -->

  <?php include_once 'components/header.php'; ?>

  <!-- End header -->
  <!-- Content
    ============================================= -->
  <div id="content">
    <!-- My Account
    ============================================= -->
    <section class="myaccount text-left padding-100">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <!-- Account -->
              <div class="account col-md-6">
                <h3>My account</h3>
                <form class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name*">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputLastName" placeholder="Last Name*">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email*">
                    </div>
                  </div>
                </form>
              </div>
              <!-- End Account -->
              <!-- Password -->
              <div class="password col-md-6">
                <h3>Password Change</h3>
                <form class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="InputPassword" placeholder="Current Password (leave blank to leave unchanged)">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="newInputPassword" placeholder="New Password (leave blank to leave unchanged)">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="confirmInputPassword" placeholder="Confirm New Password">
                    </div>
                  </div>
                  <button class="btn btn-black">Save Changes</button>
                </form>
              </div>
              <!-- End Password -->
            </div>
          </div>
        </div>
      </div>
    </section>


  <section class="container" style="margin-top: -100px">
    <div class="">
      <div class="">
        <h2>Recent Orders</h2>
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
  </section>
  </div>
  <?php include_once 'components/footer.php'; ?>
  <?php include_once 'components/scripts.php'; ?>

 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
</body>
</html>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>