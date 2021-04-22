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
                            <span class="title">Paid Out</span>
                            <span class="subtitle">&nbsp;</span>
                        </div>
                    </div>
                </div>
          </header>

            <div class="content">
                <div class="container">



                    <script language=javascript>
                        function go(p)
                        {
                          document.opts.page.value=p;
                          document.opts.submit();
                      }
                  </script>




                  <div class="aboutPage">
                    <div class="aboutBlock cfix">
                        <div class="default_table_main" style="min-height: 300px;">


                            <form method=post name=opts><input type="hidden" name="form_id" value="15950742973343"><input type="hidden" name="form_token" value="f67db513e02acc50cd4f14a11db4264a"> 
                                <input type=hidden name=a value=paidout>
                                <input type=hidden name=page value=1>                    
                            </form>
                            <table border=0 width=100%>            <tr>
                                <td class=inheader>Username</td>
                                <td class=inheader>Date</td>
                                <td class=inheader>Amount</td>
                            </tr>
                            <tr>
                                <td><b>Nancy</b></td>
                                <td><b>Jul-18-2020 04:32:13 PM</b></td>
                                <td align=right><b>$15000.09</b></td>
                            </tr>
                            <tr>
                                <td><b>David</b></td>
                                <td><b>Jul-18-2020 04:32:07 PM</b></td>
                                <td align=right><b>$1679.97</b></td>
                            </tr>
                            <tr>
                                <td><b>Skidooo</b></td>
                                <td><b>Jul-18-2020 04:32:00 PM</b></td>
                                <td align=right><b>$27962.59</b></td>
                            </tr>
                            <tr>
                                <td><b>Panda</b></td>
                                <td><b>Jul-18-2020 04:31:52 PM</b></td>
                                <td align=right><b>$10500.00</b></td>
                            </tr>
                            <tr>
                                <td><b>Dingxiang</b></td>
                                <td><b>Jul-18-2020 04:31:45 PM</b></td>
                                <td align=right><b>$10.00</b></td>
                            </tr>
                            <tr>
                                <td><b>Clinton</b></td>
                                <td><b>Jul-17-2020 05:24:55 PM</b></td>
                                <td align=right><b>$4220.25</b></td>
                            </tr>
                            <tr>
                                <td><b>Iliya</b></td>
                                <td><b>Jul-17-2020 05:24:46 PM</b></td>
                                <td align=right><b>$3900.00</b></td>
                            </tr>
                            <tr>
                                <td><b>Prince</b></td>
                                <td><b>Jul-17-2020 05:24:41 PM</b></td>
                                <td align=right><b>$4083.13</b></td>
                            </tr>
                            <tr>
                                <td><b>Dickson</b></td>
                                <td><b>Jul-17-2020 05:24:35 PM</b></td>
                                <td align=right><b>$1272.01</b></td>
                            </tr>
                            <tr>
                                <td><b>yarou</b></td>
                                <td><b>Jul-17-2020 12:42:53 PM</b></td>
                                <td align=right><b>$290.61</b></td>
                            </tr>
                            <tr>
                                <td><b>Joe</b></td>
                                <td><b>Jul-17-2020 04:46:46 AM</b></td>
                                <td align=right><b>$8146.79</b></td>
                            </tr>
                            <tr>
                                <td><b>Joshua</b></td>
                                <td><b>Jul-17-2020 04:46:40 AM</b></td>
                                <td align=right><b>$119.98</b></td>
                            </tr>
                            <tr>
                                <td><b>Erix</b></td>
                                <td><b>Jul-17-2020 04:46:34 AM</b></td>
                                <td align=right><b>$10500.00</b></td>
                            </tr>
                            <tr>
                                <td><b>Cosmos</b></td>
                                <td><b>Jul-17-2020 04:46:27 AM</b></td>
                                <td align=right><b>$4873.52</b></td>
                            </tr>
                            <tr>
                                <td><b>Roi</b></td>
                                <td><b>Jul-16-2020 05:22:41 PM</b></td>
                                <td align=right><b>$5718.35</b></td>
                            </tr>
                            <tr>
                                <td><b>Mhiz</b></td>
                                <td><b>Jul-16-2020 05:22:34 PM</b></td>
                                <td align=right><b>$119.79</b></td>
                            </tr>
                            <tr>
                                <td><b>Itz faith</b></td>
                                <td><b>Jul-16-2020 05:22:28 PM</b></td>
                                <td align=right><b>$60.00</b></td>
                            </tr>
                            <tr>
                                <td><b>Israel</b></td>
                                <td><b>Jul-16-2020 05:22:21 PM</b></td>
                                <td align=right><b>$10500.00</b></td>
                            </tr>
                            <tr>
                                <td><b>Accurate</b></td>
                                <td><b>Jul-16-2020 02:53:46 AM</b></td>
                                <td align=right><b>$1599.18</b></td>
                            </tr>
                            <tr>
                                <td><b>Beyond</b></td>
                                <td><b>Jul-16-2020 02:53:40 AM</b></td>
                                <td align=right><b>$4079.66</b></td>
                            </tr>

                        </table>

                        <div class="pagination">
                         <center>
                            1
                            <a href="javascript:go('2')">2</a>
                            <a href="javascript:go('3')">3</a>
                            <a href="javascript:go('4')">4</a>
                            <a href="javascript:go('5')">5</a>
                            <a href="javascript:go('6')">6</a>
                            <a href="javascript:go('2')">&gt;&gt;</a>
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