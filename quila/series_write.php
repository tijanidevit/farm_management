<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
	include_once 'class/session.class.php';
	$session = new Session();
  $ref = 'write.php';
  $session->check_status($ref);
  $session->check_login($ref);
	$title_obj = new Title('Write an article');
	include_once 'class/constant.class.php'; 

  include_once 'class/main_category.class.php'; 
  $main_category = new Main_category();

  include_once 'class/posts.class.php'; 
  $posts = new Posts();

?>

<body>
  <style>
        
    .add-post-text{
      margin-top: -60px;
      border-bottom: 2px solid #ccc;
      outline: none;
    }
    .new-class{
      margin-top:3px;
      border-bottom:3px solid #e75772;
      transition:.2s ease;
      outline: none;
      font-size:20px;
    }
    .ph{
      transition:.2s ease;
      font-size:10px;
    }

  </style>
<?php include_once 'fractions/header.php' ?>


  <div class="container-fluid py-1 uk-section-muted">
    <div class="text-center">
      <h2>Write an article</h2>
      <p class="lead">Write out that beautiful article on your mind. 
            <small><a href="series_write.php">Want to add a post to a series?</a></small></p>
    </div>
  </div>

  <div class="uk-section-muted">
    <div class="container py-5">
      <form method="post" id="postForm" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label>Select Main Category</label>
              <select name="main_category" required id="mainCategory" class="uk-input uk-form-large">
                <?php foreach ($main_category->fetch_main_categories() as $key): ?>
                  <option value="<?php echo $key['main_category_id'] ?>"><?php echo $key['main_category'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>


          <div class="col-md-6 col-12">
            <div class="form-group">
              <label>Select Sub Category</label>
              <select name="sub_category_id" id="subCategory" required class="uk-input uk-form-large">
                <option disabled="true">Select a category</option>
              </select>
            </div>
          </div>


          <div class="col-md-6 col-12">
            <div class="form-group">
              <label>Article Title</label>
              <input type="" name="topic" required class="uk-input uk-form-large" />
            </div>
          </div>

          <div class="col-md-6 col-12">
            <div class="form-group">
              <label>Article Media</label>
              <input type="file" accept="image/*" name="media" required class="uk-input uk-form-large" />
            </div>
          </div>


          <div id="postText" class="col-12">
              <label id='ph'>Post Here</label>
                <textarea  id="p" rows="15" name="content" class="form-control" class="add-post-text"></textarea> 
          </div>

          <div class="col-md-6 col-12">
            <div class="form-group my-5">
              <button name="submit" class="btn btn-dark">Add Article</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  

<?php include_once 'fractions/footer.php' ?>
</body>

</html>
<!-- e75772 -->

  <script src="https://cdn.tiny.cloud/1/8ewd4v9g6dj0m4xikdlg1y6xxs6zyf6woojx4ps8m4avrdi7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  <script>
  $(document).ready(function(){
    $('#mainCategory').change(function(){
      $.ajax({
          url:'actions/fetch_sub_categories_options.php',
          type: 'POST',
          data:{main: $(this).val()},
          success: function(data){
            $('#subCategory').html(data);
          }
        })
      })
    })
  $('#postForm').submit(function(e){
    e.preventDefault();
     $.ajax({
          url:'actions/add_post.php',
          type: 'POST',
          data:  new FormData(this),
          contentType: false,
          processData: false,
          cache: false,
          beforeSend: function(){
            $('#spinner').show();
          },
          success: function(data){
            console.log(data);
            if (data == 1) {
              window.location.href = './';
            }
            else{
               $('#errorArea').html(data);
            }
          }
      })
  })
</script>




<!-- <script type="text/javascript">
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
</script> -->