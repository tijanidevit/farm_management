<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
  include_once 'class/session.class.php';
  $session = new Session();
  if ($session->check_session('user_id')) {
      echo "<script>location.href = 'homepage.php'</script>";
  }

  $title_obj = new Title('Sign up');
  include_once 'class/constant.class.php';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up | <?php echo $appName ?></title>
  <link rel="shortcut icon" type="image/png" href="https://placehold.co/20x20" >
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css" />
  <script src="js/uikit.js"></script>
</head>

<body>

<div class="uk-grid-collapse" data-uk-grid>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center" data-uk-height-viewport>
    <div class="uk-width-3-4@s">
      <div class="uk-text-center uk-margin-bottom">
        <a class="uk-h2 uk-text-primary" href="./"><?php echo $appName ?></a>
      </div>
      <div class="uk-text-center uk-margin-medium-bottom">
        <h1 class="uk-letter-spacing-small">Create an Account</h1>
      </div>
<!--       <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex uk-flex-center uk-margin uk-share">
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
        <p class="uk-margin-remove">Or use your email for registration:</p>
      </div> -->
      <form class="uk-text-center" method="post" id="registerForm">
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="firstname">First name</label>
          <input id="firstname" name="firstname" class="uk-input uk-form-large uk-text-center" required type="text" placeholder="Tijani">
        </div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="othernames">Other names</label>
          <input id="othernames" name="othernames" class="uk-input uk-form-large uk-text-center" required type="text" placeholder="Frank Raymond">
        </div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="email">Email</label>
          <input id="email" name="email" class="uk-input uk-form-large uk-text-center" required type="email" placeholder="xpat@writer.com">
        </div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="username">Username</label>
          <input id="name" name="username" class="uk-input uk-form-large uk-text-center" required type="text" placeholder="Tom Atkins">
        </div>
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="password">Password</label>
          <input id="password" name="password" class="uk-input uk-form-large uk-text-center" required type="password" placeholder="Min 8 characters">
        </div>
    <div id="spinner" class="my-2" class="uk-margin-medium-top uk-text-center uk-text-primary"><span data-uk-spinner="ratio: 1.4"></span></div>

        <div id="errorArea"></div>
        
        <div class="uk-width-1-1 uk-text-center">
          <button name="submit" class="uk-button uk-button-primary uk-button-large">Sign Up</button>
        </div>
        <div class="uk-width-1-1 uk-margin uk-text-center">
          <p class="uk-text-small uk-margin-remove">By signing up you agree to our <a class="uk-link-border" href="#">terms</a> of service.</p>
        </div>
      </form>
    </div>
  </div>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center uk-light
    uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-blend" 
    style="background-image: url(https://placehold.co/680x1000);" data-uk-height-viewport>
    <div>
      <div class="uk-text-center">
        <h2 class="uk-h1 uk-letter-spacing-small">Welcome Back</h2>
      </div>
      <div class="uk-margin-top uk-margin-medium-bottom uk-text-center">
        <p>Already signed up, enter your details and start the learning today</p>
      </div>
      <div class="uk-width-1-1 uk-text-center">
        <a href="sign-in.php" class="uk-button uk-button-primary uk-button-large">Sign In</a>
      </div>
    </div>
  </div>
</div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#spinner').hide();
  })
  $('#registerForm').submit(function(e){
      e.preventDefault();

      $.ajax({
        url:'actions/register_user.php',
        type: 'POST',
        data:$('#registerForm').serialize(),
          beforeSend: function(){
            $('#spinner').show();
          },
        success: function(data){
          if (data != '') {
            $('#errorArea').html(data);
          }
            $('#spinner').hide();
        }
      })
    })
</script>

