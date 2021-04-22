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
                            <span class="title">Banners</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>
            
            <div class="content">
                <div class="container">


                    <div class="banners">
                        <div class="backImg" style="background-image: url(img/page_back1.png);"></div>
                        <div class="textBlock">
                            <p>We are open for mutually beneficial relationships and invite you to cooperation. Here you can find our banners.  You can post banners in social networks, on forums and other websites for attracting members to your partnership team. Within our partnership program you will get money for inviting new participants to our website.</p>
                        </div>
                        <div class="tabs tabsTemplate1 bannerTabs cfix">
                            <ul class="tabList navList cfix">
                                <li class="navItem"><a href="#tab-1">banner 125x125</a></li>
                                <li class="navItem"><a href="#tab-2">banner 468X60</a></li>
                                <li class="navItem"><a href="#tab-3">banner 728X90</a></li>
                                <li class="navItem"><a href="#tab-4">banner 160X600</a></li>
                                <li class="navItem"><a href="#tab-5">banner 300X600</a></li>
                            </ul>
                            <div class="contentWrap">
                                <div class="tabContent bannerContent" id="tab-1">
                                    <div class="wrap cfix">
                                        <div class="inBlockType2">
                                            <input type="text" id="banLink1" value="<a href='index2a73.html?ref='><img src='bnn/125.html'></a>" readonly>
                                        </div>
                                        <div class="btnType2Sm">
                                            <button class="innerBtn copyLink" data-clipboard-target="#banLink1">copy link</button>
                                        </div>
                                    </div>
                                    <div class="img table" style="max-width: 125px; height: 125px; border: 0; background: none;">
                                        <img  src='bnn/125.html' style="max-width: 100%;">
                                    </div>
                                </div>
                                <div class="tabContent bannerContent" id="tab-2">
                                    <div class="wrap cfix">
                                        <div class="inBlockType2">
                                            <input type="text" id="banLink2" value="<a href='index2a73.html?ref='><img src='bnn/468.html'></a>" readonly>
                                        </div>
                                        <div class="btnType2Sm">
                                            <button class="innerBtn copyLink" data-clipboard-target="#banLink2">copy link</button>
                                        </div>
                                    </div>
                                    <div class="img table" style="max-width: 468px; height: 60px; border: 0; background: none;">
                                        <img  src='bnn/468.html' style="max-width: 100%;">
                                    </div>
                                </div>
                                <div class="tabContent bannerContent" id="tab-3">
                                    <div class="wrap cfix">
                                        <div class="inBlockType2">
                                            <input type="text" id="banLink3" value="<a href='index2a73.html?ref='><img src='bnn/728.html'></a>" readonly>
                                        </div>
                                        <div class="btnType2Sm">
                                            <button class="innerBtn copyLink" data-clipboard-target="#banLink3">copy link</button>
                                        </div>
                                    </div>
                                    <div class="img table" style="max-width: 728px; height: 90px; border: 0; background: none;">
                                        <img  src='bnn/728.html' style="max-width: 100%;">
                                    </div>
                                </div>
                                <div class="tabContent bannerContent" id="tab-4">
                                    <div class="wrap cfix">
                                        <div class="inBlockType2">
                                            <input type="text" id="banLink4" value="<a href='index2a73.html?ref='><img src='bnn/160.html'></a>" readonly>
                                        </div>
                                        <div class="btnType2Sm">
                                            <button class="innerBtn copyLink" data-clipboard-target="#banLink4">copy link</button>
                                        </div>
                                    </div>
                                    <div class="img table" style="max-width: 160px; height: 600px; border: 0; background: none;">
                                        <img  src='bnn/160.html' style="max-width: 100%;">
                                    </div>
                                </div>
                                <div class="tabContent bannerContent" id="tab-5">
                                    <div class="wrap cfix">
                                        <div class="inBlockType2">
                                            <input type="text" id="banLink5" value="<a href='index2a73.html?ref='><img src='bnn/300.html'></a>" readonly>
                                        </div>
                                        <div class="btnType2Sm">
                                            <button class="innerBtn copyLink" data-clipboard-target="#banLink5">copy link</button>
                                        </div>
                                    </div>
                                    <div class="img table" style="max-width: 300px; height: 600px; border: 0; background: none;">
                                        <img  src='bnn/300.html' style="max-width: 100%;">
                                    </div>
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