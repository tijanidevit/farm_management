<?php 

$user_id = $_SESSION['user_id'];
$user_account = $conn->query("SELECT * from user_accounts where user_id = $user_id ");
$account_row = $user_account->fetch_assoc();

$account_balance = $account_row['balance'];
?>
<div class="cabHead cfix">
    <div class="logo">
        <div class="logoSm invisLink">
            <img src="img/logo.png" alt="logo">
            <div class="text">
                <span>HedgeMine</span>
                <span>trading company</span>
            </div>
            <a href="./">main</a>
        </div>
        <div class="cabMenuBtn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="headInfo iconLeftMd">
        <span class="icon-email"></span>
        <div class="data">
            <span>CONTACT US</span>
            <a href="mailto:admin@Hedge Mine" class="linkType2">admin@Hedge Mine</a>
        </div>
    </div>
    <div class="headInfo iconLeftMd">
        <span class="icon-calendar"></span>
        <div class="data clock">
            <span id="date"></span>
            <span id="time"></span>
        </div>
    </div>
    <ul class="socList">
        <li class="invisLink">
            <span class="icon-facebook"></span>
            <a href="https://www.facebook.com/" target="_blank" >facebook</a>
        </li>
        <li class="invisLink">
            <span class="icon-soc2"></span>
            <a href="https://youtu.be/"target='_blank'>youtube</a>
        </li>

        <li class="invisLink">
            <span class="icon-soc3"></span>
            <a href="https://t.me/" target="_blank" >telegram</a>
        </li>
    </ul>
    <div class="cabinetStat">
        <div class="item">
            <div class="iconLeft">
                <span class="icon-user2"></span>
                <div class="data">
                    <span class="title">Username:</span>
                    <span class="info"><?php echo $_SESSION['user'] ?></span>
                </div>
            </div>
        </div>
                        <!-- <div class="item">
                            <div class="iconLeft">
                                <span class="icon-date"></span>
                                <div class="data">
                                    <span class="title">Last seen:</span>
                                    <span class="info">Jul-28-2020 02:43:52 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="iconLeft">
                                <span class="icon-server"></span>
                                <div class="data">
                                    <span class="title">With IP adress:</span>
                                    <span class="info">156.146.46.134</span>
                                </div>
                            </div>
                        </div> -->
                        <div class="item">
                            <div class="iconLeft">
                                <span class="icon-wallet"></span>
                                <div class="data">


                                    <span class="title">Your balance: </span>
                                    <span class="sum" id="balance">$<?php echo $account_balance ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="cabBalance" id="infodata">
                   <!--  <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/18.png);"></span>
                            <div class="data">


                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>





                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/43.png);"></span>
                            <div class="data">


                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>





                            </div>



                        </div>
                    </div>
                    <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/48.png);"></span>
                            <div class="data">


                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>





                            </div>



                        </div>
                    </div>
                    <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/68.png);"></span>
                            <div class="data">


                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>





                            </div>



                        </div>
                    </div>
                    <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/79.png);"></span>
                            <div class="data">


                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>





                            </div>



                        </div>
                    </div>
                    <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/69.png);"></span>
                            <div class="data">


                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>





                            </div>



                        </div>
                    </div>
                    <div class="item">
                        <div class="iconLeft">
                            <span class="icon" style="background-image: url(img/ps_g/77.png);"></span>
                            <div class="data">
                                <span>&nbsp;  </span>
                                <span>Balance: $0.00</span>
                            </div>
                        </div>
                    </div> -->

                    </div>