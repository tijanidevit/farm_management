<?php 
    include_once 'includes/connect.php'; 
    include_once 'includes/session.php'; 
    include_once 'includes/header.php'; 
    session_exist();
?>
    <div class="csslider infinity" id="slider1">
        <input type="radio" name="slides" checked="checked" id="slides_1" />
        <input type="radio" name="slides" id="slides_2" />
        <input type="radio" name="slides" id="slides_3" />
        <input type="radio" name="slides" id="slides_4" />
        <ul>
            <li>
                <div id="bg">
                    <div class="banner-info-wthree">
                        <div class="container">
                            <h3>24*7 Services Provided For Customers</h3>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id="bg1">
                    <div class="banner-info-wthree">
                        <div class="container">
                            <h3> Experience, Excellence, Everyday</h3>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id="bg2">
                    <div class="banner-info-wthree">
                        <div class="container">
                            <h3>Propel yourself into the future.</h3>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div id="bg3">
                    <div class="banner-info-wthree">
                        <div class="container">
                            <h3>Premium Worldwide Logistics Network</h3>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="arrows">
            <label for="slides_1"></label>
            <label for="slides_2"></label>
            <label for="slides_3"></label>
            <label for="slides_4"></label>
        </div>
        <div class="navigation">
            <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
            </div>
        </div>
    </div>
        <!-- //banner -->
    </section>
    <!--// mian-content -->
    <!--/ about -->
    <section class="about py-5" id="about">
        <div class="container py-3">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">About  Saamu <span class="gold-text">Alajo</span></h3>
            </div>
            <div class="row about-grids mt-lg-5">
                <div class="col-lg-6 ab-info">
                    <h3 class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                    </h3>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit ametLorem ipsum dolor sit amet,sed diam nonumy.
                    </p>
                </div>
                <div class="col-lg-6 ab-img">
					<img class="img-fluid" src="images/img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--// about -->
    <!--/services -->
    <section class="blog_hcls_w3layouts py-lg-5 py-md-4" id="services">
        <div class="container py-sm-5 py-4">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3"> Services</h3>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-4 about-in text-center">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-ship mb-2"></span>
                                <h5 class="card-title">Secured</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-center">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-compass mb-2"></span>

                                <h5 class="card-title">Fast &amp; On Time</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-center">
                        <div class="card">
                            <div class="card-body">
                                <span class="fa fa-money mb-2"></span>
                                <h5 class="card-title">Money Minded</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </section>
    <!--// services -->
    <!--/counter-->
    <section class="stats py-lg-5 py-4" id="stats">
        <div class="container">
            <div class="row text-center">
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-thumbs-o-up mb-2"></span>
                        <h3 class="timer count-title count-number">250</h3>
                        <p class="count-text">Projects Done</p>
                    </div>
                </div>
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-smile-o mb-2"></span>
                        <h3 class="timer count-title count-number">600</h3>
                        <p class="count-text">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-users mb-2"></span>
                        <h3 class="timer count-title count-number">900</h3>
                        <p class="count-text">Team Workers</p>
                    </div>
                </div>
                <div class="col-md counter-gd-w3ls">
                    <div class="counter">
						<span class="fa fa-trophy mb-2"></span>
                        <h3 class="timer count-title count-number">7</h3>
                        <p class="count-text">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
    <section class="gallery py-5" id="gallery">
        <div class="container py-lg-5 py-3">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3" id="member">Membership</h3>
            </div>

            <div class="row">
                <div class="col-md-6 col-12 px-5">
                    <h6 class="tittle mb-lg-3 mb-3">Login Here</h6>
                    <form method="post" id='loginForm'>
                        <div id="message"></div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" placeholder="me@example.com" class="form-control" required name="email">
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="********" class="form-control" required name="password">
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-dark" id="btnLogin" name="submit">Login</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-md-6 col-12 px-5">
                    <h6 class="tittle mb-lg-3 mb-3">Sign up Here</h6>
                    <form method="post" id="signUp">
                        <div id="signUpMessage"></div>
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" placeholder="Tijani Mustapha Adekunle" class="form-control" required name="fullname">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" placeholder="07069619949" class="form-control" required name="phone">
                        </div>
                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" placeholder="Access Bank" class="form-control" required name="bank_name">
                        </div>
                        <div class="form-group">
                            <label>Account Number</label>
                            <input type="text" placeholder="7069619949" class="form-control" required name="bank_account">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" placeholder="me@example.com" class="form-control" required name="s_email">
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="********" class="form-control" required name="s_password">
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-dark" id="btnsignUp" name="submit">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  
<?php include_once 'includes/footer.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){ 
        $('#message').hide();
        $('#SignUpMessage').hide();
        $('#loginForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'includes/login.php',
                type: 'POST',
                data: $('#loginForm').serialize(),
                beforeSend: function(){
                    $('#btnLogin').append('....')
                },
                success: function(data){
                    setTimeout(function() {
                        if(data == 1){
                            window.location.href = "homepage.php";
                        }
                        else{
                            $('#message').show();
                            $('#message').addClass('alert alert-danger');
                            $('#message').html(data);
                        }
                        $('.spinner-border').remove();
                    },1000);
                }
            })
            $('#btnLogin').text('Login');

        })
        $('#loginForm').click(function(){
            $('#message').hide();
            $('#message').removeClass('alert alert-danger');
        })

        
        $('#signUp').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'includes/login.php',
                type: 'POST',
                data: $('#signUp').serialize(),
                beforeSend: function(){
                    $('#btnsignUp').append('....')
                },
                success: function(data){
                    setTimeout(function() {
                        if(data == 1){
                            window.location.href = "homepage.php";
                        }
                        else{
                            $('#signUpMessage').show();
                            $('#signUpMessage').addClass('alert alert-danger');
                            $('#signUpMessage').html(data);
                        }
                        $('.spinner-border').remove();
                    },500);
                }
            })
            $('#btnsignUp').text('Sign Up');
        })
        $('#signUp').click(function(){
            $('#signUpMessage').hide();
            $('#signUpMessage').removeClass('alert alert-danger');
        })
    })
</script>
   
</body>

</html>
