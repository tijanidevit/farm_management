<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
	include_once 'class/session.class.php'; 
	$title_obj = new Title('Homepage');
	include_once 'class/constant.class.php'; 
	$session = new Session(); 
	$session->check_status('homepage.php');
	
	include_once 'class/posts.class.php'; 
	$post = new Posts();
?>
<body onload=" fetchPosts('latestPosts')" style="scroll-behavior: smooth;">

<?php include_once 'fractions/header.php' ?>

<!-- <?php 
	//$top_posts #= $post->fetch_homepage_top_posts();
	//$tp #= 0;
	// foreach ($top_posts as $top_posts_row) 
	// 	$tp++;
 ?> -->

<header class="uk-header-beackground jumbotron">
	<div class="uk-flex uk-flex-middle uk-background-contain uk-background-center-center uk-background-norepeat uk-background-image@m" 
    data-uk-height-viewport="offset-top: true">
		<div class="uk-width-1-1">
			<div class="uk-section uk-section-large uk-flex uk-flex-middle">
				<div class="uk-container">
					<div data-uk-grid>
    
						<div class="uk-width-expand@m uk-flex uk-flex-middle" 
							data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 300">
							<div>
                <p class="uk-text-lead uk-margin-small-bottom">Top Stories</p>
								<h1 class="uk-heading-medium uk-margin-remove-top uk-light">
									<a href="article.php">Palm Springs International Film Festival Kicks Off</a></h1>
								<p class="uk-text-content uk-width-4-5@m">
									Enthusiastically enhance real-time catalysts for change via turnkey initiatives. 
									Intrinsicly simplify highly efficient services with client-centered paradigms 
									coordinate collaboration.</p>
								<div class="uk-margin-top">
									<p class="uk-article-meta uk-text-xsmall">Feb 24, 2020 — By Miranda Klein</p>
								</div>
							</div>
						</div>
            <div class="uk-width-1-4@m"></div>

						<div class="uk-width-1-4@m uk-flex uk-flex-middle" 
							data-uk-scrollspy="cls: uk-animation-slide-right-small; repeat: true; delay: 300">
							<div>
								<div class="uk-inline">
									<img src="https://placehold.co/900x500" alt="Image alt text">
									<a class="uk-position-cover" href="article.php" title="Link Title"></a>
								</div>
								<h3 class="uk-margin-small uk-light"><a href="article.php">Amy Tenner is Teaming Up for Collaboration</a></h3>
								<div class="uk-article-meta uk-text-xsmall">Feb 23, 2020 — By Sarah Cariotti</div>
								<hr class="uk-light">

								<h3 class="uk-margin-small uk-light"><a href="article.php">The Top 5 Fitness and Workout Trends</a></h3>
								<div class="uk-article-meta uk-text-xsmall">Feb 22, 2020 — By Alex Grossman</div>
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
						
	<div class="uk-container" id="posts">
		<ul class="nav nav-pills mb-0">
		  <li class="nav-item">
		    <button class="nav-link btn btn-dark" id="latestPosts" onclick="fetchPosts('latestPosts')">Latest Posts</button>
		  </li>
		  <li class="nav-item">
		    <button class="nav-link btn" id="topPosts" onclick="fetchPosts('topPosts')">Top Posts</button>
		  </li>
		  <li class="nav-item">
		    <button class="nav-link btn" id="followPosts" onclick="fetchPosts('followPosts')">Posts From People You Follow</button>
		  </li>
		  <li class="nav-item">
		    <a class="nav-lin btn" href="series.php">Series</a>
		  </li>
		</ul>

		<div class="uk-section uk-section-default">
	
			<h3 class="uk-section-title" ></h3>

			<div class="uk-child-width-1-3@s" data-uk-grid id="postArea">
			</div>

			<div id="spinner" class="my-2 uk-text-center" style="display: none;" class="uk-margin-medium-top uk-text-center uk-text-primary">
				<span data-uk-spinner="ratio: 1.4"></span>
			</div>
		</div>
</div>

<div style="bottom: 0; right: 0; position: fixed;"><a class="btn btn-dark mb-2" style="border-radius: 25px;" href="#posts">Top</a></div>
<?php include_once 'fractions/footer.php' ?>
</body>
</html>
  <?php echo $js; ?>

  <script>
  	$('.nav-link').click(function(){
  		$('.nav-link').removeClass('btn-dark');
  		$(this).fadeOut();
  		$(this).fadeIn();
  		$(this).addClass('btn-dark');
  	})

  	function fetchPosts(postType){
  		$('.uk-section-title').text('Posts');
  		$.ajax({
  			url: 'actions/fetch_posts.php',
  			type: 'POST',
  			data: {post_type : postType},
  			beforeSend: function(){
  				$('#spinner').show();
  			},
  			success: function(data){
  				$('#spinner').hide();
  				$('#postArea').html(data);
  			}
  		});
  	}
  </script>
