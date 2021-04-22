<!DOCTYPE html>
<html>

<?php 
  session_start();
  if (isset($_SESSION['user'])) {
    header('location: dashboard.php');
  }
  include_once 'php/login.php';
?>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width,user-scalable=no'>
    <title>Hedge Mining</title>

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <link rel='icon' href='favicon.ico' type='image/x-icon'>

    <link rel='stylesheet' type='text/css' href='fonts/stylesheet.css'>
    <link rel='stylesheet' type='text/css' href='fonts/icomoon/style1b26.css?v2'>
    <link rel='stylesheet' type='text/css' href='css/jquery-ui.css'>
    <link rel='stylesheet' type='text/css' href='css/modal.css'>
    <link rel='stylesheet' type='text/css' href='css/selectric.css'>
    <link rel='stylesheet' type='text/css' href='build/css/stylee6dd.css?v7'>

    <script type='text/javascript' src='js/jquery-3.3.1.js'></script>
    <script type='text/javascript' src='js/jquery-ui.js'></script>
    <script type='text/javascript' src='js/clipboard.js'></script>
    <script type='text/javascript' src='js/detect.js'></script>
    <script type='text/javascript' src='js/modal.js'></script>
    <script type='text/javascript' src='js/jquery.selectric.js'></script>
    <script type='text/javascript' src='js/script6654.js?v1'></script>
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
        table.tab th, .alert {
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

      <header class="page">
        <div class="backImg" style="background-image: url(img/head_back2.png)"></div>
        <div class="container">
          <?php include_once 'navbar.php'; ?>
          <div class="banner page">
            <div class="pageTitle">
              <span class="title">Login</span>
              <span class="subtitle">&nbsp;</span>
            </div>
          </div>
        </div>
      </header>
            <div class="content">
                <div class="container">
                    <div class="rulesPage">
                        <div class="backImg" style="background-image: url(img/page_back1.png);"></div>
                        <div class="startTabs" style="margin: 0;">
                            <div class="contentWrap" style="background-image: url(img/modal_back.png); float: none;">
                                <div class="tabContent">




                                    <script language=javascript>
                                        function checkform() {
                                          if (document.mainform.username.value=='') {
                                            alert("Please type your username!");
                                            document.mainform.username.focus();
                                            return false;
                                        }
                                        if (document.mainform.password.value=='') {
                                            alert("Please type your password!");
                                            document.mainform.password.focus();
                                            return false;
                                        }
                                        return true;
                                    }
                                </script>




                                <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="15950742868996"><input type="hidden" name="form_token" value="bee21db20fe82cefe4f04190ef8f3059">
                                    <input type=hidden name=a value='do_login'>
                                    <input type=hidden name=follow value=''>
                                    <input type=hidden name=follow_id value=''>
                                    <div class="row">

                                      <?php if (isset($err)): ?>
                                        <div class="alert alert-danger"><?php echo $err ?> </div>
                                        <br><br>
                                      <?php endif ?>
                                        <div class="item col6">
                                            <div class="inBlockType1Icon">
                                                <label for="login">login<span>*</span>:</label>
                                                <div class="inWrap">
                                                    <input type=text name='username'<?php if (isset($_POST['username'])): ?>
                                                      value='<?php echo $_POST['username'] ?>'
                                                    <?php endif ?>  autofocus="autofocus">
                                                    <span class="icon-user1"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col6">
                                            <div class="inBlockType1Icon">
                                                <label for="passLog">password<span>*</span>:</label>
                                                <div class="inWrap">
                                                    <input type=password name='password' value=''>
                                                    <span class="icon-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agree login table full">
                                        <div class="tCell middle left">
                                            <input type="checkbox" id="remember" name="agree" value="1" class="checkBtn" >                            
                                            <label for="remember">Remember</label>
                                        </div>
                                        <div class="tCell middle right">
                                            <a href="forgot_password.php" class="linkType5">Forgot password?</a>
                                        </div>
                                    </div>

                                    <div class="btnFillType2Sm">
                                        <button class="innerBtn" type="submit" name="submit">login</button>
                                    </div>
                                </form>
                            </div>
                        </div>        
                    </div>    
                </div>


            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </div>
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