<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
  include_once 'class/session.class.php';
  $session = new Session();
  if ($session->check_session('user')) {
      echo "<script>location.href = 'homepage.php'</script>";
  }
  $title_obj = new Title('Sign up');

  include_once 'class/constant.class.php';
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In | <?php echo $appName ?></title>
  <link rel="shortcut icon" type="image/png" href="https://placehold.co/20x20" >
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css" />
  <script src="js/uikit.js"></script>
  <script src="jquery.js"></script>
</head>

<body>

<div class="uk-grid-collapse" data-uk-grid>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center" data-uk-height-viewport>
    <div class="uk-width-3-4@s">
      <div class="uk-text-center uk-margin-bottom">
        <a class="uk-h2 uk-text-primary" href="./"><?php echo $appName ?></a>
      </div>
      <div class="uk-text-center uk-margin-medium-bottom">
        <h1 class="uk-letter-spacing-small">Sign In to <?php echo $appName ?></h1>
      </div>
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex uk-flex-center uk-margin uk-share">
        <div>
          <a href="#" data-uk-icon="icon: facebook" class="uk-icon-button uk-icon-button-large facebook"></a>
        </div>
        <div>
          <a href="#" data-uk-icon="icon: google-plus" class="uk-icon-button uk-icon-button-large google-plus"></a>
        </div>
        <div>
          <a href="#" data-uk-icon="icon: linkedin" class="uk-icon-button uk-icon-button-large linkedin"></a>
        </div>
      </div>    
      <div class="uk-text-center uk-margin">
        <p class="uk-margin-remove">Or use your email account:</p>
      </div>
      <form class="uk-text-center" method="post" id="loginForm">
        <div id="errorArea"></div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="email">Username or Email</label>
          <input id="username" name="username" class="uk-input uk-form-large uk-text-center" type="text" placeholder="john@example.com">
        </div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="password">Password</label>
          <input id="password" class="uk-input uk-form-large uk-text-center" type="password" name="password" placeholder="Min 8 characters">
        </div>
        <div class="uk-width-1-1 uk-margin uk-text-center">
          <a class="uk-text-small uk-link-muted" href="#">Forgot your password?</a>
        </div>
        <div class="uk-width-1-1 uk-text-center">
          <button name="submit" class="uk-button uk-button-primary uk-button-large">Sign In</button>
        </div>

    <div id="spinner" class="my-2" class="uk-margin-medium-top uk-text-center uk-text-primary"><span data-uk-spinner="ratio: 1.4"></span></div>
      </form>
    </div>
  </div>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center uk-light
    uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-blend" 
    style="background-image: url(https://placehold.co/680x1000);" data-uk-height-viewport>
    <div>
      <div class="uk-text-center">
        <h2 class="uk-h1 uk-letter-spacing-small">Hello There, Join Us</h2>
      </div>
      <div class="uk-margin-top uk-margin-medium-bottom uk-text-center">
        <p>Enter your personal details and join the learning community</p>
      </div>
      <div class="uk-width-1-1 uk-text-center">
        <a href="sign-up.php" class="uk-button uk-button-primary uk-button-large">Sign Up</a>
      </div>
    </div>
  </div>
</div>

</body>

</html>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#spinner').hide();
    $('#loginForm').submit(function(e){
        e.preventDefault();
        $.ajax({
          url:'actions/login.php',
          type: 'POST',
          data:$('#loginForm').serialize(),
          beforeSend: function(){
            $('#spinner').show();
          },
          success: function(data){
            if (data == 1) {
              location.href ='./homepage.php';
            }
            else{
              $('#errorArea').html(data);
              $('#spinner').hide();
            }
          }
        })
      })
  
    
  })
</script>
