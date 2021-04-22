<?php session_start(); ?>
<!DOCTYPE html>
<html>

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
          <header class="page">
                <div class="backImg" style="background-image: url(img/head_back2.png)"></div>
                <div class="container">
                    <?php include_once 'navbar.php'; ?>
                    <div class="banner page">
                        <div class="pageTitle">
                            <span class="title">Support</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>

            <div class="content">
                <div class="container">


                    <div class="contacts">
                        <div class="backImg" style="background-image: url(img/page_back1.png);"></div>
                        <div class="wrap">
                            <div class="row">
                                <div class="item col6">
                                    <div class="textBlock">
                                        <p>If you have any questions, please feel free to contact us. We will do our best to help you with any question. You can contact our customer service by various different means: either by filling our customer support form provided below, or by Email/Tel. Please don't hesitate to ask for any assistance you need. We will be pleased to be of help to you.</p>
                                    </div>
                                </div>
                                <div class="item col6">
                                    <div class="infoNumber">
                                        <div class="in">
                                            <div class="iconLeft">
                                                <img src="img/license.png" alt="" class="icon">
                                                <div class="data">
                                                    <span class="title">Register company</span>
                                                    <span class="num">11846912</span>
                                                    <a href="http://wck2.companieshouse.gov.uk/" target="_blank" class="linkType3">check certificate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contactList">
                            <div class="row">
                                <div class="item col4">
                                    <span class="icon-globe iconBack"></span>
                                    <span class="title">OFFICE ADDRESS</span>
                                    <p class="info">9 SEAGRAVE ROAD, FULHAM, LONDON, UNITED KINGDOM, SW6 1RP</p>
                                </div>

                                <div class="item col4">
                                    <span class="icon-phone iconBack"></span>
                                    <span class="title">CONTACT PHONE</span>
                                    <a href="tel:+442080895882" class="info">+13524438285</a>
                                </div>



                                <div class="item col4">
                                    <span class="icon-support iconBack"></span>
                                    <span class="title">GENERAL SUPPORT</span>
                                    <a href="mailto:Admin@Hedgemining" class="info">Admin@Hedgemining</a>
                                </div>
                            </div>
                        </div>



                        <div class="formWrap">
                            <div class="headingCenter">
                                <span class="sub">get touch witch us</span>
                                <span class="tit">SUPPORT <span>FORM</span></span>
                            </div>
                            <div class="contactForm">


                                <script language=javascript>

                                    function checkform() {
                                      if (document.mainform.name.value == '') {
                                        alert("Please type your full name!");
                                        document.mainform.name.focus();
                                        return false;
                                    }
                                    if (document.mainform.email.value == '') {
                                        alert("Please enter your e-mail address!");
                                        document.mainform.email.focus();
                                        return false;
                                    }
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                }

                            </script>



                            <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="15950742958808"><input type="hidden" name="form_token" value="438274a201d674129352259c01744995">
                                <input type=hidden name=a value=support>
                                <input type=hidden name=action value=send>


                                <div class="row">
                                    <div class="item col6">
                                        <div class="inBlockType2">
                                            <label for="name">your name<span>*</span>:</label>
                                            <input type="text" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="item col6">
                                        <div class="inBlockType2">
                                            <label for="email">e-mail<span>*</span>:</label>
                                            <input type="text" name="email" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item col12">
                                        <div class="inBlockType2">
                                            <label for="message">your message<span>*</span>:</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap cfix">


                                    <div class="btnFillType2Sm">
                                        <button class="innerBtn" type="submit">send message</button>
                                    </div>
                                </div>
                            </form>

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