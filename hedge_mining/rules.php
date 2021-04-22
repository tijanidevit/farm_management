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
                            <span class="title">Rules</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>

            <div class="content">
                <div class="container">


                    <div class="rulesPage"> 
                        <div class="backImg" style="background-image: url(img/page_back1.png);"></div>


                        <div class="textBlock">
                            <p class="strong">These regulations concern the provision of investment services by the Hedge Mining LIMITED company to its customers.</p>
                            <ul class="list">
                                <li>Please read these 'Terms and Conditions' carefully before using our Site.</li>
                                <li>By using our Site, you are agreeing to be legally bound by these 'Terms and Conditions' and are committing fully and unconditionally to the obligations set out herein.</li>
                                <li>Please note that these 'Terms and Conditions' shall form a binding contract between you and us.</li>
                            </ul>
                        </div>
                        <div class="rulesList">
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">01.</span> REGISTRATION OF THE USER ON THE SITE</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">1.1.</span> In order to use the services of the company, the User has to complete the registration procedure, as a result of which the account is created. </p>
                                        <p><span class="num">1.2.</span> By the fact of registration, the User confirms acceptance of all the provisions of Terms of Use and accepts all rights and obligations arising in this connection. </p>
                                        <p><span class="num">1.3.</span> To participate in the project allowed persons over the age of 18. By registering, the User confirms that he/she is of legal age. By registering, the User also agrees and confirms that he/she uses the site in its sole discretion, voluntarily and on his/her own initiative.</p>
                                        <p><span class="num">1.4.</span> The User undertakes to provide the Company only with only true and current personal information and e-mail address (Registration Data).</p>
                                        <p><span class="num">1.5.</span> The User agrees to the best of their abilities to maintain and update the Registration Data to keep it current and complete.</p>
                                        <p><span class="num">1.6.</span> The User undertakes to store all authorization data (password, login) in an environment where third parties are not admitted to them, and take all available actions to protect their personal data from unauthorized and malicious access.</p>
                                        <p><span class="num">1.7.</span> Each User can have only one account registered from one PC or IP address. Please note! If we find out you have multiple accounts, all of them will be blocked and the funds forfeited without any notice.</p>
                                        <p><span class="num">1.8.</span> After passing the registration procedure, the User who has expressed a desire to participate in the investment process of the Company becomes the 'Investor'.</p>
                                        <p><span class="num">1.9.</span> If you are not ready to accept the terms written herewith, please do not register for an account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">02.</span> INVESTMENT POLICY</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">2.1.</span> Every deposit is considered as a private transaction between the Company and the Investor.</p>
                                        <p><span class="num">2.2.</span> A deposit is considered active if its term has not expired according to the relevant investment plan.</p>
                                        <p><span class="num">2.3.</span> All accruals in the Personal Account are made according to the chosen investment package. </p>
                                        <p><span class="num">2.4.</span> Accruals and payouts to the Investor are made only in the currency of the electronic payment system used by that Investor to make deposit.</p>
                                        <p><span class="num">2.5.</span> The Investor has the right to freely dispose of the funds that are on his personal account</p>
                                        <p><span class="num">2.6.</span> Payment of referral commissions is made only in the currency of the electronic payment system used by a particular referral to make deposit. The Company does not pay referral commissions for deposits made by a referral from their account balance.</p>
                                        <p><span class="num">2.7.</span> The Investor acknowledges and agrees that he has been notified that he cannot unilaterally change their billing information submitted during registration.</p>
                                        <p><span class="num">2.8.</span> The Investor agrees that before creating a deposit, he carefully checked all the details about the deposit and fully agreed with all the terms and conditions of the selected investment plan.</p>
                                        <p><span class="num">2.9.</span> The Investor acknowledges and agrees that investment plan that he has chosen cannot be changed after a deposit has been created.</p>
                                        <p><span class="num">2.10.</span> The nominal value of all active deposits cannot be withdrawn from the system until the deposits expire.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">03.</span> CONFIDENTIALITY</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">3.1.</span> The company adheres to the principles of anonymity and confidentiality of personal data of its customers.</p>
                                        <p><span class="num">3.2.</span> The company does not divulge any data of its customers to third parties that contain their personal information, contact details, as well as the fact of participation. The only information that is displayed publicly is current deposit statistics, which includes the amount of the deposit, payment method and username of the investor.</p>
                                        <p><span class="num">3.3.</span> Investor's real name is never shown publicly and is never displayed. Investor is allowed to pick any username except for forbidden ones.</p>
                                        <p><span class="num">3.4.</span> The Company guarantees that customer's data is never, under any circumstances, will fall into the database used for spam by third parties.</p>
                                        <p><span class="num">3.5.</span> All the data giving by customers will only be used to improve the service that we provide them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">04.</span> ELECTRONIC COMMUNICATION</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">4.1.</span> When using the site, you accept that communication with us will be mainly electronic. You agree to this electronic means of communication and you acknowledge that all contracts, notices, information and other communications that we provide to you electronically comply with any legal requirement that such communications be in writing. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">05.</span> DISCLAIMER</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">5.1.</span> The Company is not a defendant for the accuracy or correctness of the Customer’s perception of the information content presented on the site. All information posted on the site is advisory and informational and should not be considered as a call for any action.</p>
                                        <p><span class="num">5.2.</span> The Company shall not be liable for any losses arising from delay in the transmission of the funds due to causes beyond its control. Delays may result from failures in the operation of electronic payment systems that the Investor uses to conduct the investment process or withdraw funds.</p>
                                        <p><span class="num">5.3.</span> The Company does not bear responsibility for mistakes made by the Investor when completing the payment details.</p>
                                        <p><span class="num">5.4.</span> The Company is not responsible for temporary interruptions of work or failures in the use of the site, including any failures that have been caused by the service provider.</p>
                                        <p><span class="num">5.5.</span> The Company shall not be liable for any losses arising from failure of the Investor to hold his PC systems free from malicious software used by third parties to get unauthorized access to Investor’s account. It is Investor’s sole responsibility to check his PC for trojans, key loggers and other malware.</p>
                                        <p><span class="num">5.6.</span> The Company cannot be a defendant for failures in the work of the site, if they were caused by force majeure circumstances.</p>
                                        <p><span class="num">5.7.</span> The website administration shall not be liable to User for termination of access to the Website if the User violates any provisions of these 'Terms and Conditions'.</p>                    
                                    </div>
                                </div>
                            </div>
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">06.</span> MODIFYING THE WEBSITE</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">6.1.</span> The site may develop and change over time. The site administration (Hedge Mining) reserves the right to itself for information change on the given site without the prevention. We may amend, update, add to, replace or withdraw elements of the site at any time at our sole discretion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="rulesItem">
                                <span class="secCaption"><span class="num">07.</span> CHANGES TO THESE RULES</span>
                                <div class="content">
                                    <div class="textBlock">
                                        <p><span class="num">7.1.</span> The Company is entitled to unilaterally change these 'Terms and Conditions' without notice. Changes shall take legal effect immediately on publication.</p>
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