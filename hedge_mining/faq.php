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
                            <span class="title">FAQ</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>
            <div class="content">
                <div class="container">


                    <div class="faqPage">
                        <div class="backImg" style="background-image: url(img/page_back1.png);"></div>
                        <div class="textBlock">
                            <p></p>
                        </div>
                        <div class="tabs tabsTemplate1 faqTabs cfix">
                            <ul class="tabList navList">
                                <li class="navItem"><a href="#tab1">General Questions</a></li>
                                <li class="navItem"><a href="#tab2">Financial Questions</a></li>
                                <li class="navItem"><a href="#tab3">Withdrawals Questions</a></li>
                                <li class="navItem"><a href="#tab4">Affiliate Program Questions</a></li>
                            </ul>
                            <div class="contentWrap" style="background-image: url(img/faq_back.png)">
                                <div class="tabContent faqContent" id="tab1">
                                    <div class="faqList">
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What is the first step to start investing?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>In order to start investing with Hedge Mining you need to create your own account. At the top of each page of our site you can find the 'SIGN UP' button, аnd also, you can use the 'CREATE ACCOUNT' button on the Home page. Once you click it, you get to see a registration form that you need to fill it up. Provide all the required information and complete the registration process.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Who can participate in your project?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Any individual regardless of where they live can avail our services. Hedge Mining is open to cooperate for everyone. However, you need to be of legal age in your jurisdiction in order to participate in our project.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How many accounts can I register in your project?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>You can only register one account per person. In the event of multiple registrations from your computer, we are able to freeze all of your deposits.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How may I access my account?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>You may log into your account by clicking the 'SIGN IN' button above and enter your username and password.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head active">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How secure user accounts and personal data?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>On our website we are using advanced SSL encryption technology. All information is transferred using encryption technologies and once stored on our servers, it is maintained safe using the latest firewall technologies available today.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How our company generates profits for its investors?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>We use of wide ranges of currency pairs (diversification of risk) and the combination of various strategies. Our trading strategies allow to determine the most effective algorithm for entry into the transaction. It helps to make a large number of profitable operations per trading day and generate high profits. In addition, our employees provide a thorough analysis of the most profitable shares and securities, and by blending good analysis with effective implementation, our success rate is improving dramatically. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Is your company officially registered?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Yes, the Hedge Mining LIMITED Company is officially registered in the United Kingdom. We have all necessary permits to engage in trading and investment activities. Company registration number is 11846912.</p>
                                                </div>
                                            </div>
                                        </div>                    
                                    </div>
                                </div>
                                <div class="tabContent faqContent" id="tab2">
                                    <div class="faqList">
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What do I need to do to start earning?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Any registered user has the right to start investing by making a deposit. Just log into your Personal Account, select the investment plan and payment method that suits you best. And then follow the easy steps on making a deposit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Is there any other way earn profit in your program besides opening a deposit?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Yes, you can join our referral program and receive affiliate bonuses every time one of your referrals makes an investment in our program.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What payment methods are available to invest?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>For the users' comfort, we have chosen the most popular payment methods. You can invest through PerfectMoney, Bitcoin, Bitcoin Cash, Litecoin, Dogecoin, Ethereum, Payeer.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Can I have several individual deposits, made by various payment methods?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Yes, you can create several individual deposits with different investment plans, using different payment systems.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head active">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What kind of investment plans does the Hedge Mining company offer?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Our marketing department prepared for our clients a wide range of investment proposals that differ in their profitability, investment term and the amount of the minimum deposit. We offer you today seven regular investment plans and three VIP plans type 'After'. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How long does it take for my deposit to be added to my account?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>The time of the transfer of funds depends on the rules of the chosen payment system. As a rule, the transfer is made in instant mode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What is the basis of profit charging?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Profit will be accrued on your personal account according to the investment plan that was chosen.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What amount can I invest?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>You can invest any amount from $10 to $100000.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Is it possible to open more than one deposit?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Yes, it is possible for our clients to have an unlimited number of deposits in one account, in this case each deposit will have its own terms of accruals and will be paid in the same e-currency in which it was made.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Does a profit paid directly to my currency account?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>No, profits are paid on your Hedge Mining account and you can withdraw them anytime. Please pay attention that in accordance with our investment proposals, the profit is paid out after the period of investment plan expiry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How to get a super profit from the invested funds?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>To get the maximum return on investment, some professional investors practice the mechanism of reinvestment of profits, in the long term it allows them to significantly increase profits.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Can I do a direct deposit from my account balance?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Yes, it is possible. Log into your personal account and choose desired investment plan, fill in desired amount of deposit and then choose 'spend funds from the Account Balance'.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabContent faqContent" id="tab3">
                                    <div class="faqList">
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How can I withdraw funds?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>First, create a request for withdrawal of funds to your wallet. Log into your account using your username and password, click on the 'Withdraw' section, fill in the form and click 'Request'. If you have made everything correctly, then click on the 'Confirm' button. You will see the following message: Withdrawal request has been successfully saved. Now just wait for funds transfer to your electronic wallet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Is there any commission for withdrawing funds?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>No, there is no commission in the system. The commission is charged only by the chosen payment system.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Once I have created a withdrawal request, how long will it take the system to process it?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>All the withdrawal requests are processed manually, which can take up to 48  business hours.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">I have not received funds. What should I do?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>First, make sure that you comply with all the conditions of the system when you withdraw funds. If everything was done correctly, get in touch with our customer support service. Maybe there was some kind of problem with the payment system you use.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head active">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Am I able to request the deposit withdrawal before the end of investment period?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>No, the deposit can be withdrawn (together with a profit) only after the end of investment period which is specified in the investment plan that was chosen.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What payment system can I use for withdrawal?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Withdrawal is available only by using the same payment system which was used to make a deposit.</p>
                                                </div>
                                            </div>
                                        </div>                    
                                    </div>
                                </div>
                                <div class="tabContent faqContent" id="tab4">
                                    <div class="faqList">
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">What is the Affiliate program?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>The essence of the Affiliate Program is that the program gathers people who share the same interests, and it really helps them to succeed. Our Affiliate program has been created for our users who are ready to participate in the development of our company and receive a worthy reward for it.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How does the Affiliate program work?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>It works on a very simple principle. You provide a referral link to potential clients, and they use it to enter the site. If they register and make a deposit, you receive a bonus of 5% from the amount of their deposit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Who can join the partnership program?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Any person opening an account on our site, who is ready to participate in the development of our company can join our referral program.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How much money can I earn additionally by using the Affiliate program?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>Being a partner, you receive bonus of 5% of each deposit made by the attracted client. The more clients you attract, the more they deposit and, accordingly, the more you earn.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head active">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">How can I check who my inviter is?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>To check who your upline is, go to the Partners section in your account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Where can I get my referral link and banners?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>You can find your referral link in your Personal account, and our banners on the 'Banners' page.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faqItem dropItem">
                                            <div class="head">
                                                <div class="iconLeft">
                                                    <span class="icon-faq2"></span>
                                                    <span class="data">Can I withdraw my partner reward to any convenient payment system?</span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="textBlock invert">
                                                    <p>No, all payments of partner remuneration are correlated directly with the payment system, which your referral used to create a deposit in the program. This means that if your referral has created a deposit, for example, using the Payeer payment system, you can get the partner reward for this deposit only through the Payeer payment system.</p>
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