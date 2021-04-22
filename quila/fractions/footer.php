<footer class="uk-section uk-section-secondary uk-text-san-serif" style="">
	<div class="uk-container uk-text-muted">
		<div class="uk-child-width-1-2@s uk-child-width-1-5@m" data-uk-grid>
			<div>
				<h5 class="uk-text-san-serif">Company</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Marketing Tools</a></li>
					<li><a class="uk-link-muted" href="#">Presentations</a></li>
					<li><a class="uk-link-muted" href="#">Professionals</a></li>
					<li><a class="uk-link-muted" href="#">Appointments</a></li>
					<li><a class="uk-link-muted" href="#">Stores</a></li>
				</ul>
			</div>
			<div>
				<h5 class="uk-text-san-serif">Community</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Webinars</a></li>
					<li><a class="uk-link-muted" href="#">Developers</a></li>
					<li><a class="uk-link-muted" href="#">Platforms</a></li>
					<li><a class="uk-link-muted" href="#">Workshops</a></li>
					<li><a class="uk-link-muted" href="#">Local Meetups</a></li>
				</ul>
			</div>
			<div>
				<h5 class="uk-text-san-serif">Join Us</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Our Initiatives</a></li>
					<li><a class="uk-link-muted" href="#">Giving Back</a></li>
					<li><a class="uk-link-muted" href="#">Communities</a></li>
					<li><a class="uk-link-muted" href="#">Youth Program</a></li>
					<li><a class="uk-link-muted" href="#">Charity</a></li>
				</ul>
			</div>
			<div>
				<h5 class="uk-text-san-serif">Contact</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Contact Form</a></li>
					<li><a class="uk-link-muted" href="#">LinkedIn</a></li>
					<li><a class="uk-link-muted" href="#">Facebook</a></li>
					<li><a class="uk-link-muted" href="#">Instagram</a></li>
					<li><a class="uk-link-muted" href="#">Visit Us</a></li>
				</ul>
			</div>
			<div>
				<div class="uk-margin">
					<a href="#" class="uk-h3 uk-text-san-serif"><?php echo $appName ?></a>
				</div>
				<div class="uk-margin uk-text-small">				
					<p>Made by a <a href="https://drifter.works/" target="_blank">Drifter</a> in Guatemala City.</p>
				</div>
				<div class="uk-margin">
					<div data-uk-grid class="uk-child-width-auto uk-grid-small">
						<div class="uk-first-column">
							<a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="mailto:<?php echo $info_mail_link ?>" data-uk-icon="icon: mail" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</footer>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-h3 uk-text-san-serif uk-text-bold" href="index.php"><?php echo $appName ?></a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
      <li><a href="index.php">Home</a></li>
      <li><a href="category.php">Fashion</a></li>
      <li><a href="category.php">Eating</a></li>
      <li><a href="category.php">Exercise</a></li>
      <li><a href="category.php">Mind</a></li>
      <li><a href="category.php">Travel</a></li>
      <li><a href="category.php">Business</a></li>
      <li><a href="sign-up.php">Sign Up</a></li>
    </ul>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php echo $js ?>