<?php echo $head; ?>
  <header >
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky ; cls-inactive: uk-navbar-transparent ; top: 600">
	  <nav class="uk-navbar-container uk-letter-spacing-small">
	    <div class="uk-container">
	      <div class="uk-position-z-index" data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo uk-text-bold uk-hidden@m" href="./"><?php echo $appName ?></a>
	          <ul class="uk-navbar-nav uk-visible@m">
	            <li><a href="main_categories.php">Categories</a></li>
	            <li><a href="series.php">Series</a></li>
	            <li><a href="posts.php">Post</a></li>
	            <li><a href="exercises.php">Exercise</a></li>
	          </ul>
	        </div>
	        <div class="uk-navbar-center">
	          <a class="uk-navbar-item uk-logo uk-text-bold uk-visible@m" href="./"><?php echo $appName ?></a>
	        </div>
	        <div class="uk-navbar-right">
	          <ul class="uk-navbar-nav uk-visible@m">
            	<li><a href="training.php">Training</a></li> 
            	<li><a href="contests.php">Contests</a></li>	
            	<?php if ($session->check_session('user')): ?>         
            		<li><a href="write.php">Write</a></li>  
            		<li><a href="logout.php">Logout</a></li>
            	<?php else: ?>
            		<li><a href="sign-up.php">Sign Up</a></li>
            		<li><a href="sign-in.php">Sign In</a></li>
            	<?php endif ?>
	          </ul>
	          <div>
	            <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
	            <div class="uk-drop uk-border-rounded" data-uk-drop="mode: click; pos: left-center; offset: 0">
	              <form class="uk-search uk-search-navbar uk-width-1-1">
	                <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>
	              </form>
	            </div>
	          </div>          
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	            data-uk-navbar-toggle-icon></span></a>
	        </div>
	      </div>
	    </div>
	  </nav>
	  <hr class="uk-margin-remove uk-light">
	</div>
</header>