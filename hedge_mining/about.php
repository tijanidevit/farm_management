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
                            <span class="title">About Us</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>
        
            <div class="content">
                <div class="container">


                    <div class="aboutPage">
                        <div class="aboutBlock cfix">
                            <div class="textBlock left">
                                <p>Hedge Mining is a fully registered online trading company based in the United Kingdom. The company is managed by a team of lawyers, economists, professional analysts, professional stock and forex traders. We have brought together a coherent team of true professionals who have a real passion for what they do. Doing what we love is great, but making our business successful is a lot harder. As one of the most dynamic markets in which to trade, speculating on the Forex market comes with big rewards as well as big risks. It’s important to understand how to mitigate your risk in order to build your success and that’s where valuable trading strategies come in. We use the best time-tested strategies, and also we use popular recommendations. The Forex market allows our traders to invest in virtually any currency pair in the world. There are more than 150 widely traded currencies in the world, and each currency can be pegged against another currency, which is then floated freely in the market. The use of wide ranges of currency pairs, the combination of various strategies and observance the principles of risk management - all this contributes to the growth of profit. The key to successful trade is also the introduction of new trading algorithms using sophisticated data analysis techniques. This allows us to increase constantly the number of working capital and to increase the company's profitability rapidly.</p>            
                            </div>
                            <div class="contentImg right invisImg" style="background-image: url(img/about_img1.jpg)">
                                <img src="img/about_img1.jpg" alt="img">
                            </div>
                        </div>
                        <div class="advTemplate">
                            <div class="backImg" style="background-image: url(img/page_back2.png);"></div>
                            <div class="wrap cfix">
                                <div class="img" style="background-image: url(img/logo_back.png)"></div>
                                <div class="left">
                                    <div class="item table full">
                                        <div class="content tCell middle right">
                                            <span class="title">PROMISING INVESTMENTS</span>
                                            <div class="textBlock">
                                                <p>Currently, the currency exchange market is on its rise and in the process of inevitable development of society and technologies, which will continue scaling up in time and providing new opportunities for profit.</p>
                                            </div>
                                        </div>
                                        <div class="icon tCell top right">
                                            <span class="icon-data iconBack">
                                                <span class="shadow"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="item table full">
                                        <div class="content tCell middle right">
                                            <span class="title">PROFITABLE INVESTMENT PACKAGES</span>
                                            <div class="textBlock">
                                                <p>Our investment platform provides you with the most favorable conditions for cooperation, including short term investment plans and progressive scale of profitability.</p>
                                            </div>
                                        </div>
                                        <div class="icon tCell top right">
                                            <span class="icon-puzzle iconBack">
                                                <span class="shadow"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="item table full">
                                        <div class="icon tCell top left">
                                            <span class="icon-progress iconBack">
                                                <span class="shadow"></span>
                                            </span>
                                        </div>
                                        <div class="content tCell middle left">
                                            <span class="title">BEST MANAGEMENT TEAM </span>
                                            <div class="textBlock">
                                                <p>The staff of Hedge Mining is a team of professionals who invest and allocate your funds in ways that create the greatest long-term returns for you.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item table full">
                                        <div class="icon tCell top left">
                                            <span class="icon-wallet iconBack">
                                                <span class="shadow"></span>
                                            </span>
                                        </div>
                                        <div class="content tCell middle left">
                                            <span class="title">COOPERATION OPPORTUNITIES</span>
                                            <div class="textBlock">
                                                <p>We have established a firm foundation for mutually advantageous customer relationship, which can be fully experienced by using our investment offer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aboutBlock cfix">
                            <div class="contentImg left invisImg" style="background-image: url(img/about_img2.jpg)">
                                <img src="img/about_img1.jpg" alt="img">
                            </div>
                            <div class="textBlock">
                                <p>These principles are used both to trade on the Forex and to participate in the financial activity on the London Stock Exchange. Every day, people increasingly decide to become part of the exchange sector and to trade shares. Stocks are a part, if not the cornerstone, of nearly any investment portfolio. What was once a toy of the rich has now turned into the vehicle of choice for growing wealth. Nowadays, nearly anybody can own stocks. Being a large institutional investor we have some advantages which include the timely access to privileged information, full-time research departments, large amounts of capital to invest, discounts on commissions, transaction fees, and even share prices based on the large dollar amount we invest and more significant experience. As an institutional client, we get news and analysis before the public does and can act on information more quickly. Our employees conduct daily audit of completed transactions, closely follow quotations on stock exchanges in order to get the maximum possible profit.</p>            
                            </div>
                            <div class="textBlock">
                             <p>Today we are able to offer a quality service for long term to everyone interested in investing. We aim to build long-lasting relationships with our clients based on trust. And we want our investors to stay with us. So, we have built our business around being on our investors’ side, and wanting them to invest profitably. And, of course, we will earn your trust and loyalty by delivering an exceptional trading experience with superior execution. </p>
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

<!-- created by thealmighty wisdom ayeola  Copier/3.x [XR&CO'2014], Sat, 18 Jul 2020 12:12:39 GMT -->
</html>