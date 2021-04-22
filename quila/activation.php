<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
include_once 'class/session.class.php';
$session = new Session();
$title_obj = new Title('Activate');
include_once 'class/constant.class.php'; 
?>

<body>

  <?php include_once 'fractions/header.php' ?>
  <div class="container-fluid py-3 uk-section-muted">
    <div class="text-center">
      <h2>Activate Your Account</h2>
      <p class="lead">Start reading and writing</p>
    </div>

    <div class="container py-3 text-center">
      <h4>Registration Successful</h4>
      <p>To start reading and enjoying this service, please go to your mail and enter the activation code to the box below</p>
      <form method="post" id="activateForm">
        <div class="row">
          <div class="col-md-3 col-12"></div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label>Activation Code</label>
              <input type="text" name="code" required class="uk-input uk-form-large" />
            </div>
            <div class="form-group">
              <button class="btn btn-dark">Activate Account</button>
            </div>


            <div id="spinner" class="my-2" class="uk-margin-medium-top uk-text-center uk-text-primary"><span data-uk-spinner="ratio: 1.4"></span></div>

            <div id="errorArea"></div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include_once 'fractions/footer.php' ?>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#spinner').hide();
  })

  $('#activateForm').submit(function(e){
      e.preventDefault();

      $.ajax({
        url:'actions/activate_user.php',
        type: 'POST',
        data:$(this).serialize(),
          beforeSend: function(){
            $('#spinner').show();
          },
        success: function(data){
          
          if (data == 1) {
            <?php if (isset($ref)): ?>
              location.href = '<?php echo $ref ?>';
            <?php else: ?>
              location.href = 'homepage.php';
            <?php endif ?>
          }
          else{
            $('#errorArea').html(data);
          }
            $('#spinner').hide();
        }
      })
    })

  </script>