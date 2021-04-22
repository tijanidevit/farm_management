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
                            <span class="title">Investors Stats</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>
            <div class="content">
                <div class="container">


                    <div class="aboutPage">
                        <div class="aboutBlock cfix">
                            <div class="default_table_main" style="min-height: 300px;">
                                <table border=0 width=100%>            <tr>
                                    <td class=inheader>Username</td>
                                    <td class=inheader><b>Deposit</b></td>
                                    <td class=inheader><b>Earn</b></td>
                                    <td class=inheader><b>Withdraw</b></td>
                                </tr>

                                <tr>
                                    <td><b>Samuel S</b></td>
                                    <td align=right><b>$402.55</b></td>
                                    <td align=right><b>$563.58</b></td>
                                    <td align=right><b>$833.57</b></td>
                                </tr>
                                <tr>
                                    <td><b>Prosper</b></td>
                                    <td align=right><b>$12050.00</b></td>
                                    <td align=right><b>$36060.00</b></td>
                                    <td align=right><b>$48110.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Niceman</b></td>
                                    <td align=right><b>$49.00</b></td>
                                    <td align=right><b>$58.80</b></td>
                                    <td align=right><b>$32.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Esther ziko</b></td>
                                    <td align=right><b>$2040.88</b></td>
                                    <td align=right><b>$5878.06</b></td>
                                    <td align=right><b>$298.95</b></td>
                                </tr>
                                <tr>
                                    <td><b>Sandra</b></td>
                                    <td align=right><b>$219.83</b></td>
                                    <td align=right><b>$307.76</b></td>
                                    <td align=right><b>$527.59</b></td>
                                </tr>
                                <tr>
                                    <td><b>S~pee</b></td>
                                    <td align=right><b>$130.00</b></td>
                                    <td align=right><b>$182.00</b></td>
                                    <td align=right><b>$312.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Adeshino</b></td>
                                    <td align=right><b>$70.00</b></td>
                                    <td align=right><b>$84.00</b></td>
                                    <td align=right><b>$114.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Rejoice</b></td>
                                    <td align=right><b>$3000.00</b></td>
                                    <td align=right><b>$8200.00</b></td>
                                    <td align=right><b>$8699.99</b></td>
                                </tr>
                                <tr>
                                    <td><b>Sunny luqman</b></td>
                                    <td align=right><b>$160.00</b></td>
                                    <td align=right><b>$218.00</b></td>
                                    <td align=right><b>$247.99</b></td>
                                </tr>
                                <tr>
                                    <td><b>Gabriella</b></td>
                                    <td align=right><b>$138.00</b></td>
                                    <td align=right><b>$165.59</b></td>
                                    <td align=right><b>$207.59</b></td>
                                </tr>
                                <tr>
                                    <td><b>Garet</b></td>
                                    <td align=right><b>$754.66</b></td>
                                    <td align=right><b>$1509.33</b></td>
                                    <td align=right><b>$2264.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Grant</b></td>
                                    <td align=right><b>$4420.00</b></td>
                                    <td align=right><b>$12340.00</b></td>
                                    <td align=right><b>$14000.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Derick kong</b></td>
                                    <td align=right><b>$140.00</b></td>
                                    <td align=right><b>$196.00</b></td>
                                    <td align=right><b>$336.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Vatt vivid</b></td>
                                    <td align=right><b>$90.00</b></td>
                                    <td align=right><b>$108.00</b></td>
                                    <td align=right><b>$197.99</b></td>
                                </tr>
                                <tr>
                                    <td><b>Natan</b></td>
                                    <td align=right><b>$300.00</b></td>
                                    <td align=right><b>$420.00</b></td>
                                    <td align=right><b>$719.78</b></td>
                                </tr>
                                <tr>
                                    <td><b>Calvin</b></td>
                                    <td align=right><b>$50.00</b></td>
                                    <td align=right><b>$60.00</b></td>
                                    <td align=right><b>$101.69</b></td>
                                </tr>
                                <tr>
                                    <td><b>De Santos</b></td>
                                    <td align=right><b>$20.00</b></td>
                                    <td align=right><b>$24.00</b></td>
                                    <td align=right><b>$44.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Bandoga</b></td>
                                    <td align=right><b>$740.00</b></td>
                                    <td align=right><b>$1480.00</b></td>
                                    <td align=right><b>$2219.67</b></td>
                                </tr>
                                <tr>
                                    <td><b>Basini</b></td>
                                    <td align=right><b>$40.00</b></td>
                                    <td align=right><b>$48.00</b></td>
                                    <td align=right><b>$88.00</b></td>
                                </tr>
                                <tr>
                                    <td><b>Salma</b></td>
                                    <td align=right><b>$590.30</b></td>
                                    <td align=right><b>$789.96</b></td>
                                    <td align=right><b>$0.00</b></td>
                                </tr>

                                <tr>
                                    <td><b>TOTAL</b></td>
                                    <td align=right><b>$1152245.51</b></td>
                                    <td align=right><b>$3227699.50</b></td>
                                    <td align=right><b>$751348.20</b></td>
                                </tr>
                            </table>

                            <div class="pagination">
                             <center>
                               <a href="index71a3.html?a=members_stats&amp;page=4">&lt;&lt;</a>
                               <a href="index4ff2.html?a=members_stats&amp;page=1">1</a>
                               <a href="indexdd79.html?a=members_stats&amp;page=6">&gt;&gt;</a>
                           </center>
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