<!DOCTYPE html>
<html>
<?php 
  session_start();
  if (isset($_SESSION['user'])) {
    header('location: dashboard.php');
  }
  include_once 'php/signup.php';
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
  <script type='text/javascript' src='script.js'></script>


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
              <span class="title">Sign Up</span>
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
                  <form method="post" id="regform" name="regform" onsubmit=" return checkform()">
                    <input type="hidden" name="form_id" value="15950742877246"><input type="hidden" name="form_token" value="5c82260bb286cc4528d9132e74bf1108">
                    <input type=hidden name=a value="signup">
                    <input type=hidden name=action value="signup">


                    <div class="row">
                      <?php if (isset($err)): ?>
                        <div class="alert alert-danger"><?php echo $err ?> </div>
                        <br><br>
                      <?php endif ?>
                      <div class="item col6">
                        <div class="inBlockType1Icon">
                          <label for="nameReg">Your username<span>*</span>:</label>
                          <div class="inWrap">
                            <input type=text name='username'
                            <?php if (isset($_POST['username'])): ?>
                            value='<?php echo $_POST['username'] ?>'
                            <?php endif ?> required>
                            <span class="icon-user1"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label for="fullNameReg">Your full name<span>*</span>:</label>
                          <div class="inWrap">
                            <input type=text name='fullname'
                            <?php if (isset($_POST['fullname'])): ?>
                            value='<?php echo $_POST['fullname'] ?>'
                            <?php endif ?> required>
                            <span class="icon-id"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label for="mailReg">Your e-mail address<span>*</span>:</label>
                          <div class="inWrap">
                            <input type=text name='email'
                            <?php if (isset($_POST['email'])): ?>
                            value='<?php echo $_POST['email'] ?>'
                            <?php endif ?> required>
                            <span class="icon-email"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label for="reMailReg">Retype your e-mail<span>*</span>:</label>
                          <div class="inWrap">
                            <input type=text name='email1'
                            <?php if (isset($_POST['email1'])): ?>
                            value='<?php echo $_POST['email1'] ?>'
                            <?php endif ?> required>
                            <span class="icon-email"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label>Upline:</label>
                          <div class="inWrap">
                            <input type="text" value="N/A" disabled="">
                            <span class="icon-verified"></span>
                          </div>
                        </div>

                        <div class="inBlockType1Icon">
                          <label for="ansReg">Bitcoin:</label>
                          <div class="inWrap">
                            <input type=text name='bitcoin'
                            <?php if (isset($_POST['bitcoin'])): ?>
                            value='<?php echo $_POST['bitcoin'] ?>'
                            <?php endif ?> required data-validate="regexp" data-validate-regexp="^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Bitcoin Address" placeholder="1YourBitcoinAddressmwGAiHnxQWP8J2">
                          </div>
                        </div>                                       

                      </div>
                      <div class="item col6">
                        <div class="inBlockType1Icon">
                          <label for="passReg">Define password<span>*</span>:</label>
                          <div class="inWrap">
                            <input type='password' name='password' required>
                            <span class="icon-lock"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label for="rePassReg">Retype password<span>*</span>:</label>
                          <div class="inWrap">
                            <input type='password' name='password2' required>
                            <span class="icon-lock"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label for="quesReg">Secret question<span>*</span>:</label>
                          <div class="inWrap">
                            <input type=text name='sq'
                            <?php if (isset($_POST['sq'])): ?>
                            value='<?php echo $_POST['sq'] ?>'
                            <?php endif ?> required>
                            <span class="icon-faq1"></span>
                          </div>
                        </div>
                        <div class="inBlockType1Icon">
                          <label for="ansReg">Secret answer<span>*</span>:</label>
                          <div class="inWrap">
                            <input type=text name='sa'
                            <?php if (isset($_POST['sa'])): ?>
                            value='<?php echo $_POST['sa'] ?>'
                            <?php endif ?> required>
                            <span class="icon-verified"></span>
                          </div>
                        </div>                                

                      </div>
                    </div>

                    <div class="agree">
                      <input type="checkbox" id="agreeReg" class="checkBtn" name=agree value=1 >
                      <label for="agreeReg">I agree <a href="#" class="linkType5">Terms and conditions</a></label>
                    </div>
                    <div class="btnFillType2Sm">
                      <button class="innerBtn" type="submit" name="submit">register</button>
                    </div>


                  </form>

                </div>
              </div>        
            </div>    
          </div>


        </div>
      </div>
      <?php require_once 'footer.php'; ?>
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




    <script language=javascript>
     function checkform() {
      if (document.regform.fullname.value == '') {
        alert("Please enter your full name!");
        document.regform.fullname.focus();
        return false;
      }


      if (document.regform.username.value == '') {
        alert("Please enter your username!");
        document.regform.username.focus();
        return false;
      }
      if (document.regform.password.value == '') {
        alert("Please enter your password!");
        document.regform.password.focus();
        return false;
      }
      if (document.regform.password.value != document.regform.password2.value) {
        alert("Both password don't match!");
        document.regform.password2.focus();
        return false;
      }


      if (document.regform.email.value == '') {
        alert("Please enter your e-mail address!");
        document.regform.email.focus();
        return false;
      }
      if (document.regform.email.value != document.regform.email1.value) {
        alert("Please retupe your e-mail!");
        document.regform.email.focus();
        return false;
      }
      if (document.regform.agree.checked == false) {
        alert("You have to agree with the Terms and Conditions!");
        return false;
      }
      return true;
    }

    function IsNumeric(sText) {
      var ValidChars = "0123456789";
      var IsNumber=true;
      var Char;
      if (sText == '') return false;
      for (i = 0; i < sText.length && IsNumber == true; i++) { 
        Char = sText.charAt(i); 
        if (ValidChars.indexOf(Char) == -1) {
          IsNumber = false;
        }
      }
      return IsNumber;
    }
  </script>


</body>

</html>