<?php 
session_start();
if (!isset($_SESSION['user'])) {
  header('location: login.php');
}
include_once 'php/conn.php';
$user_id = $_SESSION['user_id'];
$user_saving = $conn->query("SELECT * from user_savings where user_id = $user_id order by date_saved desc ");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width,user-scalable=no'>
  <title>Hedge Mine</title>

  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
  <link rel='icon' href='favicon.ico' type='image/x-icon'>

  <link rel='stylesheet' type='text/css' href='fonts/stylesheet.css'>
  <link rel='stylesheet' type='text/css' href='fonts/icomoon/style.css?v2'>
  <link rel='stylesheet' type='text/css' href='css/jquery-ui.css'>
  <link rel='stylesheet' type='text/css' href='css/modal.css'>
  <link rel='stylesheet' type='text/css' href='css/selectric.css'>
  <link rel='stylesheet' type='text/css' href='build/css/style.css?v7'>
  <link rel='stylesheet' type='text/css' href='style.css'>
  <link rel='stylesheet' type='text/css' href='bootstrap.min.css'>

  <script type='text/javascript' src='js/jquery-3.3.1.js'></script>
  <script type='text/javascript' src='js/jquery-ui.js'></script>
  <script type='text/javascript' src='js/clipboard.js'></script>
  <script type='text/javascript' src='js/detect.js'></script>
  <script type='text/javascript' src='js/modal.js'></script>
  <script type='text/javascript' src='js/jquery.selectric.js'></script>
  <script type='text/javascript' src='js/script.js?v1'></script>
  <script type='text/javascript' src='js/animation.js'></script>

  <style>
   .sbmt {
    width: 300px;
    line-height: 41px;
    padding-left: 25px;
    padding-right: 10px;
    font-size: 15px;
    letter-spacing: 0.2em;
    color: #0e201d;
    background-color: #ffe450;
    display: inline-block;
    position: relative;
    padding-top: 0px;
    padding-bottom: 0px;
    font-family: "Intro";
    text-align: center;
    text-transform: uppercase;
    border: none;
    border-top-color: currentcolor;
    border-top-style: none;
    border-top-width: medium;
    border-right-color: currentcolor;
    border-right-style: none;
    border-right-width: medium;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
    border-left-color: currentcolor;
    border-left-style: none;
    border-left-width: medium;
    border-image-outset: 0;
    border-image-repeat: stretch;
    border-image-slice: 100%;
    border-image-source: none;
    border-image-width: 1;
    outline: none;
    outline-color: currentcolor;
    outline-style: none;
    outline-width: medium;
    cursor: pointer;
    -webkit-transition: background-color 0.3s;
    -moz-transition: background-color 0.3s;
    transition-property: background-color;
    transition-duration: 0.3s;
    transition-timing-function: ease;
    transition-delay: 0s;
    -o-transition: background-color 0.3s;
    transition: background-color 0.3s;
    transition-property: background-color;
    transition-duration: 0.3s;
    transition-timing-function: ease;
    transition-delay: 0s;
  }

  .sbmt:hover {
    width: 300px;
    line-height: 41px;
    padding-left: 25px;
    padding-right: 10px;
    font-size: 15px;
    letter-spacing: 0.2em;
    color: #0e201d;
    background-color: #D7BB1B;
    display: inline-block;
    position: relative;
    padding-top: 0px;
    padding-bottom: 0px;
    font-family: "Intro";
    text-align: center;
    text-transform: uppercase;
    border: none;
    border-top-color: currentcolor;
    border-top-style: none;
    border-top-width: medium;
    border-right-color: currentcolor;
    border-right-style: none;
    border-right-width: medium;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
    border-left-color: currentcolor;
    border-left-style: none;
    border-left-width: medium;
    border-image-outset: 0;
    border-image-repeat: stretch;
    border-image-slice: 100%;
    border-image-source: none;
    border-image-width: 1;
    outline: none;
    outline-color: currentcolor;
    outline-style: none;
    outline-width: medium;
    cursor: pointer;
    -webkit-transition: background-color 0.3s;
    -moz-transition: background-color 0.3s;
    transition-property: background-color;
    transition-duration: 0.3s;
    transition-timing-function: ease;
    transition-delay: 0s;
    -o-transition: background-color 0.3s;
    transition: background-color 0.3s;
    transition-property: background-color;
    transition-duration: 0.3s;
    transition-timing-function: ease;
    transition-delay: 0s;
  }

  button {
    -webkit-outline: none;
    -moz-outline: none;
    outline: none;
    outline-color: currentcolor;
    outline-style: none;
    outline-width: medium;

  }
  table.tab {    font-size: 14px;
    color: #000;
    width: 100%;
    border-width: 1px;
    border-color: #DA0014;
    border-collapse: collapse;
    /* font-weight: 600; */
    font-family: sans-serif;
    letter-spacing: 1px;}
    table.tab th {
      font-size: 14px;
      background-color: #083d41;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #083d41;
      text-align: center;
      color: #ffe450;
      font-family: sans-serif;
      letter-spacing: 0px;
      height:40px;
    }
    table.tab tr {}
    table.tab td {    font-size: 14px;
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #1ea9a2;
      background-color: #148882;
      color: #fff;
      height:40px;
    }


    table.blank {font-size: 14px;
      color: #000;
      width: 100%;
      border-width: 1px;
      border-color: #DA0014;
      border-collapse: collapse;
      /* font-weight: 600; */
      font-family: sans-serif;
      letter-spacing:.5px;}
      table.blank th {font-size:14px;background-color:#abd28e;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
      table.blank tr {}
      table.blank td {font-size:14px;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;}

    </style>


  </head>
  <body>
    <div class="bodyWrap">
      <div class="cabinetPage" style="background-image: url(img/cab_back.jpg)">
        <div class="pageContent">
          <?php include_once 'header.php'; ?>
          <div class="cabWrapper cfix">
            <?php include_once 'sidebar.php'; ?>


            <div class="cabContent" style="background-image: url(img/cabContent_back.png)">
              <div class="inner">    

                <span class="cabCaption">Deposit LIST</span>
                <div class="accWra">
                  <div class="grid">
                    <div class="item col12">
                      <div class="accInfo">
                        <span class="icon-link iconBak"></span>
                        <div class="contentItem">
                          <span class="title">Your Deposit History</span>
                          <table class="tab">
                            <thead>
                              <th>Amount Deposited</th>
                              <th>Date Deposited</th>
                              <th>Status</th>
                            </thead>

                            <tbody>
                              <?php while ($row = $user_saving->fetch_assoc()): ?>
                                <tr>
                                  <td>$<?php echo $row['amount'] ?></td>
                                  <td><?php echo $row['date_saved'] ?></td>
                                  <td>
                                    <?php if ($row['status'] == 1): ?>
                                      <span class="text-white">Approved</span>
                                    <?php endif ?>
                                    <?php if ($row['status'] == 0): ?>
                                      <span class="text-warning">Pending</span>
                                    <?php endif ?>
                                  </td>
                                </tr>
                              <?php endwhile ?>
                            </tbody>
                          </table>
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
      <?php include_once 'dfooter.php'; ?>
    </div>

    <script>
      /*$('#inforef').hide();*/
      $.ajax({
        url: "?a=referals",
        context: document.body
      }).done(function(data) {
        $('#inforef').html($(data).find('#inforef').html()).show();
      });
    </script>








    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5e38a4e3a89cda5a1883efaa/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
  </html>