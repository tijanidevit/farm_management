<div class="topLine table full">
    <div class="tCell bottom">
        <div class="logoSm invisLink">
            <img src="img/logo.png" alt="logo">
            <div class="text">
                <span>Hedge Mining</span>
                <span>trading company</span>
            </div>
            <a href="./">main</a>
        </div>
    </div>
    <div class="tCell middle">
        <?php if (isset($_SESSION['user'])): ?>
            <div class="btnType1Color1">
                <a class="innerBtn" href="dashboard.php" style="font-size: 12.3px;">dashboard</a>
            </div>
            <div class="btnType1Color2">
                <a class="innerBtn" href="logout.php">log out</a>
            </div>
        <?php endif ?>

        <?php if (!isset($_SESSION['user'])): ?>
            <div class="btnType1Color1">
                <a class="innerBtn" href="signup.php">sign up</a>
            </div>
            <div class="btnType1Color2">
                <a class="innerBtn" href="login.php">sign in</a>
            </div>
        <?php endif ?>

    </div>
    <div class="tCell middle">
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
    </div>
    <div class="tCell middle" style="min-width: 180px;">
        <div class="headInfo iconLeftMd">
            <span class="icon-calendar"></span>
            <div class="data clock">
                <span id="date"></span>
                <span id="time"></span>
            </div>
        </div>
    </div>
    <div class="tCell middle right">
        <div class="headInfo iconLeftMd">
            <span class="icon-email"></span>
            <div class="data">
                <span>CONTACT US</span>
                <a href="mailto:Admin@Hedgemining" class="linkType2">Admin@Hedgemining</a>
            </div>
        </div>
    </div>
    <div class="menuBtn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<ul class="menu">
    <li><a href="./" >Home</a></li>
    <span>/</span>
    <li><a href="about.php">About Us</a></li>
    <span>/</span>
    <li><a href="faq.php" >FAQ</a></li>
    <span>/</span>
    <li><a href="rules.php" >Rules</a></li>
    <span>/</span>
    <li><a href="rate_us.php" >Rate Us</a></li>
    <span>/</span>
    <li><a href="banners.php" >Banners</a></li>
    <span>/</span>
    <li><a href="invest.php" >Investment Plans</a></li>
    <span>/</span>
    <li><a href="support.php" >Contact Us</a></li>
</ul>