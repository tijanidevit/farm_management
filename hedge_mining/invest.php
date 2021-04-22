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
                            <span class="title">Invest</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>

            <div class="content">
                <div class="container">


                    <div class="investPlans">
                        <div class="backImg" style="background-image: url(img/page_back1.png)"></div>
                        <div class="textBlock">        
                            <p>While developing our investment plans, we tried to create equally profitable and safe conditions for both newcomers and experienced investors. We are pleased to present you 10 investment plans type 'After' that include seven regular investment plans and three VIP plans. Depending on the amount of your deposit and the term of chosen investment period, you will receive guaranteed income after a certain period of time. Our investment proposals provide one-time accrual of income and your initial deposit will be included in the total return. It means that your principal amount will not be returned separately.</p>

                            <p>Please note that investment plan duration is specified in calendar days.</p>
                        </div>
                        <div class="investList">
                            <div class="wrap cfix">
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">140%</span>
                                            <span class="txt">After 1 day</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $400.00 104.00%</li>
                                            <li>$401.00 - $1000.00 106.00%</li>
                                            <li>$1001.00 - $2500.00 108.00%</li>
                                            <li>$2501.00 - $5000.00 115.00%</li>
                                            <li>$5001.00 - $10000.00 125.00%</li>
                                            <li>$10001.00 - $25000.00 130.00%</li>
                                            <li>$25001.00 - $50000.00 135.00%</li>
                                            <li>$50001.00 - $100000.00 140.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">350%</span>
                                            <span class="txt">After 6 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $400.00 135.00%</li>
                                            <li>$401.00 - $1000.00 140.00%</li>
                                            <li>$1001.00 - $2500.00 160.00%</li>
                                            <li>$2501.00 - $5000.00 210.00%</li>
                                            <li>$5001.00 - $10000.00 270.00%</li>
                                            <li>$10001.00 - $25000.00 300.00%</li>
                                            <li>$25001.00 - $50000.00 330.00%</li>
                                            <li>$50001.00 - $100000.00 350.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">550%</span>
                                            <span class="txt">After 9 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $400.00 180.00%</li>
                                            <li>$401.00 - $1000.00 200.00%</li>
                                            <li>$1001.00 - $2500.00 220.00%</li>
                                            <li>$2501.00 - $5000.00 300.00%</li>
                                            <li>$5001.00 - $10000.00 390.00%</li>
                                            <li>$10001.00 - $25000.00 440.00%</li>
                                            <li>$25001.00 - $50000.00 500.00%</li>
                                            <li>$50001.00 - $100000.00 550.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>        
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">1100%</span>
                                            <span class="txt">After 18 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $400.00 330.00%</li>
                                            <li>$401.00 - $1000.00 370.00%</li>
                                            <li>$1001.00 - $2500.00 400.00%</li>
                                            <li>$2501.00 - $5000.00 570.00%</li>
                                            <li>$5001.00 - $10000.00 750.00%</li>
                                            <li>$10001.00 - $25000.00 870.00%</li>
                                            <li>$25001.00 - $50000.00 1000.00%</li>
                                            <li>$50001.00 - $100000.00 1100.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">1500%</span>
                                            <span class="txt">After 36 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $5000.00 1000.00%</li>
                                            <li>$5001.00 - $100000.00 1500.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cfix"></div>
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">2000%</span>
                                            <span class="txt">After 60 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $100000.00 2000.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem">
                                        <div class="in">
                                            <span class="num">2500%</span>
                                            <span class="txt">After 80 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">10$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$10.00 - $100000.00 2500.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem vip">
                                        <div class="in">
                                            <span class="status">vip</span>
                                            <span class="num">1000%</span>
                                            <span class="txt">After 5 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">5000$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$5000.00 - $100000.00 1000.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem vip">
                                        <div class="in">
                                            <span class="status">vip</span>
                                            <span class="num">2000%</span>
                                            <span class="txt">After 10 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">3000$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$3000.00 - $100000.00 2000.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="planItem vip">
                                        <div class="in">
                                            <span class="status">vip</span>
                                            <span class="num">3000%</span>
                                            <span class="txt">After 30 days</span>
                                        </div>
                                    </div>
                                    <div class="planCard">
                                        <ul class="minMax">
                                            <li>
                                                <span class="param">min</span>
                                                <span class="dots"></span>
                                                <span class="data">1000$</span>
                                            </li>
                                            <li>
                                                <span class="param">max</span>
                                                <span class="dots"></span>
                                                <span class="data">100000$</span>
                                            </li>
                                        </ul>
                                        <ul class="termsList">
                                            <li>$1000.00 - $100000.00 3000.00%</li>
                                        </ul>
                                        <div class="btnType1Color2Shadow">
                                            <a href="signup.php" class="innerBtn">invest now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calculator invest">
                            <div class="headingCenter">
                                <span class="sub">earn today</span>
                                <span class="tit">profit <span>calcucator</span></span>
                            </div>
                            <div class="calcBlock cfix">
                                <form onsubmit="return calc()" class="cfix" method="post"><input type="hidden" name="form_id" value="15950742953011"><input type="hidden" name="form_token" value="75625a3479f17136bc2ece24583067e3"><input type="hidden" name="form_id" value="15572682777239"><input type="hidden" name="form_token" value="7ec25e005277728ebf4b00c3c05cf22c">
                                    <div class="iconLeft">
                                        <span class="icon-calc"></span>
                                        <span class="title">profit<br>calculator</span>
                                    </div>
                                    <div class="inBlockType1 plan">
                                       <select class="selectricBl" id="calc_plan" name="planList">
                                        <option value="0" data-name="" data-percent="140" data-days="1">140% After 1 Day</option>
                                        <option value="1" data-name="" data-percent="350" data-days="6">350% After 6 Days</option>
                                        <option value="2" data-name="" data-percent="550" data-days="9">550% After 9 Days</option>
                                        <option value="3" data-name="" data-percent="1100" data-days="18">1100% After 18 Days</option>
                                        <option value="4" data-name="" data-percent="1500" data-days="36">1500% After 36 Days</option>
                                        <option value="5" data-name="" data-percent="2000" data-days="60">2000% After 60 Days</option>
                                        <option value="6" data-name="" data-percent="2500" data-days="80">2500% After 80 Days</option>
                                        <option value="7" data-name="" data-percent="1000" data-days="7">VIP plan 1: 1000% After 5 Days</option>
                                        <option value="8" data-name="" data-percent="2000" data-days="10">VIP plan 2: 2000% After 10 Days</option>
                                        <option value="9" data-name="" data-percent="3000" data-days="30">VIP plan 3: 3000% After 30 Days</option>
                                    </select>
                                </div>
                                <div class="inBlockType1Icon sum">
                                    <input type="number" value="10" id="calc_amount" class="enterNum">            
                                    <span class="cur">$</span>
                                </div>
                                <ul class="profit">
                                    <li>
                                        <span class="param">TOTAL PERCENT</span>
                                        <span class="dots"></span>
                                        <span class="data" id="percent_total"></span>
                                    </li>
                                    <li>
                                        <span class="param">TOTAL PROFIT</span>
                                        <span class="dots"></span>
                                        <span class="data" id="profit_total"></span>
                                    </li>
                                </ul>
                                <div class="btnType2Sm">
                                    <a href="signup.php" class="innerBtn">invest now</a>
                                </div>
                                <input type="submit" style="display: none;" id="calc_btn">
                            </form>
                        </div>
                        <script>
                            var plans = new Array;
                            plans[0] = new Array;            plans[0][0] = new Array(10.0000000000, 400.0000000000, 104.00, 1);
                            plans[0][1] = new Array(401.0000000000, 1000.0000000000, 106.00, 1);
                            plans[0][2] = new Array(1001.0000000000, 2500.0000000000, 108.00, 1);
                            plans[0][3] = new Array(2501.0000000000, 5000.0000000000, 115.00, 1);
                            plans[0][4] = new Array(5001.0000000000, 10000.0000000000, 125.00, 1);
                            plans[0][5] = new Array(10001.0000000000, 25000.0000000000, 130.00, 1);
                            plans[0][6] = new Array(25001.0000000000, 50000.0000000000, 135.00, 1);
                            plans[0][7] = new Array(50001.0000000000, 100000.0000000000, 140.00, 1);
                            plans[1] = new Array;            plans[1][0] = new Array(10.0000000000, 400.0000000000, 135.00, 6);
                            plans[1][1] = new Array(401.0000000000, 1000.0000000000, 140.00, 6);
                            plans[1][2] = new Array(1001.0000000000, 2500.0000000000, 160.00, 6);
                            plans[1][3] = new Array(2501.0000000000, 5000.0000000000, 210.00, 6);
                            plans[1][4] = new Array(5001.0000000000, 10000.0000000000, 270.00, 6);
                            plans[1][5] = new Array(10001.0000000000, 25000.0000000000, 300.00, 6);
                            plans[1][6] = new Array(25001.0000000000, 50000.0000000000, 330.00, 6);
                            plans[1][7] = new Array(50000.0000000000, 100000.0000000000, 350.00, 6);
                            plans[2] = new Array;            plans[2][0] = new Array(10.0000000000, 400.0000000000, 180.00, 9);
                            plans[2][1] = new Array(401.0000000000, 1000.0000000000, 200.00, 9);
                            plans[2][2] = new Array(1001.0000000000, 2500.0000000000, 220.00, 9);
                            plans[2][3] = new Array(2501.0000000000, 5000.0000000000, 300.00, 9);
                            plans[2][4] = new Array(5001.0000000000, 10000.0000000000, 390.00, 9);
                            plans[2][5] = new Array(10001.0000000000, 25000.0000000000, 440.00, 9);
                            plans[2][6] = new Array(25001.0000000000, 50000.0000000000, 500.00, 9);
                            plans[2][7] = new Array(50001.0000000000, 100000.0000000000, 550.00, 9);
                            plans[3] = new Array;            plans[3][0] = new Array(10.0000000000, 400.0000000000, 330.00, 18);
                            plans[3][1] = new Array(401.0000000000, 1000.0000000000, 370.00, 18);
                            plans[3][2] = new Array(1001.0000000000, 2500.0000000000, 400.00, 18);
                            plans[3][3] = new Array(2501.0000000000, 5000.0000000000, 570.00, 18);
                            plans[3][4] = new Array(5001.0000000000, 10000.0000000000, 750.00, 18);
                            plans[3][5] = new Array(10001.0000000000, 25000.0000000000, 870.00, 18);
                            plans[3][6] = new Array(25001.0000000000, 50000.0000000000, 1000.00, 18);
                            plans[3][7] = new Array(50001.0000000000, 100000.0000000000, 1100.00, 18);
                            plans[4] = new Array;            plans[4][0] = new Array(10.0000000000, 5000.0000000000, 1000.00, 36);
                            plans[4][1] = new Array(5001.0000000000, 100000.0000000000, 1500.00, 36);
                            plans[5] = new Array;            plans[5][0] = new Array(10.0000000000, 100000.0000000000, 2000.00, 60);
                            plans[6] = new Array;            plans[6][0] = new Array(10.0000000000, 100000.0000000000, 2500.00, 80);
                            plans[7] = new Array;            plans[7][0] = new Array(5000.0000000000, 100000.0000000000, 1000.00, 7);
                            plans[8] = new Array;            plans[8][0] = new Array(3000.0000000000, 100000.0000000000, 2000.00, 10);
                            plans[9] = new Array;            plans[9][0] = new Array(1000.0000000000, 100000.0000000000, 3000.00, 30);

                            function calc() {
                                amount = $('#calc_amount').val();
                                percent = 0;
                                plan = plans[$('#calc_plan').val()];

                                if (amount<plans[0][0]) {
                                    amount = plan[0][0];
                                    /*$('#calc_amount').val(amount);*/
                                }

                                for (var i = 0; i < plan.length; i++) {
                                    if ((amount >= plan[i][0]) && ((amount <= plan[i][1]) || (plan[i][1] == 0))) {
                                        percent = plan[i][2];
                                        days = plan[i][3];                
                                    }
                                }
                                profit = percent * amount / 100;
                                profit_total = percent * amount / 100 /* * days*/;
                                /*$('#profit_daily').html((profit).toFixed(2) + "$");*/
                                $('#percent_total').html((percent).toFixed(2) + "%");
                                $('#profit_total').html((profit_total).toFixed(2) + "$");

                                $('#calc_amount').attr('min', plan[0][0]);
                                if (plan[plan.length-1][1]>0) $('#calc_amount').attr('max', plan[plan.length-1][1]);
                                else $('#calc_amount').attr('max', '');

                                return false;
                            }

                            var flag = 0;
                            jQuery(document).ready(function(){
                                jQuery('#calc_plan').on('change', function(){        
                                    jQuery('#calc_amount').change();
                                });

                                jQuery('#calc_amount').on('change keyup', function(){            
                                    jQuery('#calc_btn').click();
                                });

                                jQuery('#calc_btn').click();
                            });
                        </script>

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