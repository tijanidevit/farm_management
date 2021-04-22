<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<?php 
	include_once 'class/session.class.php'; 
	$title_obj = new Title('Homepage');
	include_once 'class/constant.class.php'; 
	$session = new Session();
	if ($session->check_session('user')) {
		$session->redirect('homepage.php','');
	}
?>
<body>

<?php include_once 'fractions/header.php' ?>
<header class="uk-header-beackground">
	<div class="uk-flex uk-flex-middle uk-background-contain uk-background-center-center uk-background-norepeat uk-background-image@m" 
    style="background-image: url(https://placehold.co/600x900);" data-uk-height-viewport="offset-top: true">
		<div class="uk-width-1-1">
			<div class="uk-section uk-section-large uk-flex uk-flex-middle">
				<div class="uk-container">
					<div data-uk-grid>
						<div class="uk-width-expand@m uk-flex uk-flex-middle" 
							data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 300">
							<div>
                <p class="uk-text-lead uk-margin-small-bottom">Featured Story</p>
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

<div class="uk-home-trending">
	<div class="uk-grid-collapse" data-uk-grid>
		<div class="uk-width-1-3@l"></div>
		<div class="uk-width-expand@l">
			<div class="uk-background-default uk-trending-padding">
				<div data-uk-grid>
					<div class="uk-width-1-2@m">
						<div>
							<div class="uk-grid-small" data-uk-grid>
								<div class="uk-width-auto">
									<div class="uk-inline">
										<img src="https://placehold.co/120" alt="Image alt text">
										<a class="uk-position-cover" href="article.php" title="Link Title"></a>
									</div>
								</div>
								<div class="uk-width-expand uk-flex uk-flex-middle">
									<div>
										<h4 class="uk-margin-small-bottom"><a href="article.php">Six of the Best New Beauty Products Launching Now</a></h4>
										<div class="uk-article-meta uk-text-xsmall">Feb 20, 2020 — By Maddison Allen</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
					<div class="uk-width-1-2@m">
						<div>
							<div class="uk-grid-small" data-uk-grid>
								<div class="uk-width-auto">
									<div class="uk-inline">
										<img src="https://placehold.co/120" alt="Image alt text">
										<a class="uk-position-cover" href="article.php" title="Link Title"></a>
									</div>
								</div>
								<div class="uk-width-expand uk-flex uk-flex-middle">
									<div>
										<h4 class="uk-margin-small-bottom"><a href="article.php">How Often Should You Wash Your Jeans?</a></h4>
										<div class="uk-article-meta uk-text-xsmall">Feb 22, 2020 — By Tom Gross</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-section uk-section-default">
	<div class="uk-container">
		<h3 class="uk-section-title">The Latest</h3>
		<div class="uk-child-width-1-2@m" data-uk-grid>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/920x920" alt="Image alt">
					<div class="uk-position-cover uk-overlay-primary uk-flex uk-flex-bottom">
						<div class="uk-padding">
							<h4 class="uk-margin-small-bottom"><a href="article.php">Seven Chic, Beanie-Free Ways to Cover Your Head This Season</a></h4>
							<div class="uk-article-meta uk-text-xsmall">Feb 16, 2020 — By Terry Grossman</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="uk-child-width-1-2" data-uk-grid>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
					</div>
					<div class="uk-flex uk-flex-middle">
						<div>
							<h4><a href="article.php">The Top 5 Fitness and Workout Trends for 2020</a></h4>
							<div class="uk-article-meta uk-text-xsmall uk-margin-small">Jan 26, 2020 — By Rob Cerny</div>
							<div class="uk-margin-top">Appropriately actualize 
								team building opportunities vis-a-vis collaborative information testing procedures.</div>
						</div>
					</div>
				</div>
				<div class="uk-child-width-1-2" data-uk-grid>
					<div class="uk-flex uk-flex-middle">
						<div>
							<h4><a href="article.php">All the Looks From the 2020 Golden Globes</a></h4>
							<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Alex Grossman</div>
							<div class="uk-margin-top">Gabricate inexpensive schemas for transparent e-business. Appropriately actualize 
								team building opportunities.</div>
						</div>
					</div>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div data-uk-grid>
			<div class="uk-width-1-3@m">
				<div class="uk-child-width-1-2 uk-child-width-1-1@m" data-uk-grid>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620x320" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
						<h4 class="uk-margin-top"><a href="article.php">Everyone Wore Puff Sleeves at the Golden Globes</a></h4>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small">Jan 26, 2020 — By Rob Cerny</div>
						<div class="uk-margin-top">Appropriately actualize 
							team building opportunities vis-a-vis collaborative information testing procedures.</div>
					</div>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620x320" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
						<h4 class="uk-margin-top"><a href="article.php">All the Looks From the 2020 Golden Globes</a></h4>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Alex Grossman</div>
						<div class="uk-margin-top">Appropriately actualize 
							team building opportunities vis-a-vis collaborative information testing procedures.</div>
					</div>
				</div>
			</div>
			<div class="uk-width-expand@m">
				<div>
					<div class="uk-inline">
						<img src="https://placehold.co/920x640" alt="Image alt text">
						<a class="uk-position-cover" href="article.php" title="Link Title"></a>
					</div>
				</div>
				<div class="uk-child-width-1-2@s uk-margin-medium-top" data-uk-grid>
					<div>
						<h4 class="uk-h1"><a href="article.php">Chile’s Hotels Will Change the Way You Think</a></h4>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small">Jan 26, 2020 — By Rob Cerny</div>
					</div>
					<div>Holisticly fabricate inexpensive actualize 
						team building opportunities vis-a-vis collaborative information procedures schemas for transparent 
						e-business. Appropriately actualize 
						team building opportunities vis-a-vis collaborative information procedures.</div>
				</div>
			</div>
		</div>		
	</div>
</div>

<div class="uk-section uk-section-muted">
	<div class="uk-container">
		<h3 class="uk-section-title">Healthly Choices</h3>
		<div class="uk-child-width-1-3@s" data-uk-grid>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/620x900" alt="Image alt text">
					<a class="uk-position-cover" href="article.php" title="Link Title"></a>
				</div>
				<h4 class="uk-margin-top"><a href="article.php">Everyone Wore Puff Sleeves at the Golden Globes</a></h4>
				<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Ben Koss</div>
				<div class="uk-margin-top">Fabricate schemas for transparent e-business. Appropriately actualize 
					team building opportunities vis-a-vis collaborative information procedures.</div>
			</div>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/620x900" alt="Image alt text">
					<a class="uk-position-cover" href="article.php" title="Link Title"></a>
				</div>
				<h4 class="uk-margin-top"><a href="article.php">All the Looks From the 2020 Golden Globes</a></h4>
				<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Alex Gross</div>
				<div class="uk-margin-top">Inexpensive schemas for transparent e-business. Appropriately actualize 
					team building opportunities vis-a-vis collaborative information procedures.</div>
			</div>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/620x900" alt="Image alt text">
					<a class="uk-position-cover" href="article.php" title="Link Title"></a>
				</div>
				<h4 class="uk-margin-top"><a href="article.php">Gucci Marks the Lunar New Year With Mickey Mouse</a></h4>
				<div class="uk-article-meta uk-text-xsmall uk-margin-small">Jan 26, 2020 — By Rob Cerny</div>
				<div class="uk-margin-top">Schemas for transparent e-business. Appropriately actualize 
					team building opportunities vis-a-vis collaborative information procedures.</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-section uk-section-default">
	<div class="uk-container">
		<div class="uk-background-cover uk-background-center-center uk-background-norepeat uk-padding-large" 
			style="background-image: url(https://placehold.co/1200x500/ddd/ddd);">
			<div class="uk-width-2-3@m">
				<p class="uk-text-lead uk-margin-small-bottom">Featured Story</p>
				<h1 class="uk-heading-medium uk-margin-remove-top">
					Palm Springs International Film Festival Kicks Off</h1>
				<div class="uk-child-width-1-3@s uk-margin-large-top" data-uk-grid>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620x360/aaa/fff" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
						<h5 class="uk-margin-top"><a href="article.php">All the Looks From the 2020 Golden Globes</a></h5>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 23, 2020 — By John Benson</div>
					</div>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620x360/aaa/fff" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
						<h5 class="uk-margin-top"><a href="article.php">Everyone Wore Puff Sleeves at the Golden Globes</a></h5>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Alex Gross</div>
					</div>
					<div>
						<div class="uk-inline">
							<img src="https://placehold.co/620x360/aaa/fff" alt="Image alt text">
							<a class="uk-position-cover" href="article.php" title="Link Title"></a>
						</div>
						<h5 class="uk-margin-top"><a href="article.php">Chile’s Hotels Will Change the Way You Think</a></h5>
						<div class="uk-article-meta uk-text-xsmall uk-margin-small">Jan 26, 2020 — By Rob Cerny</div>
					</div>
				</div>
			</div>
    </div>	
	</div>
</div>

<div class="uk-section uk-section-default">
	<div class="uk-container">
		<h3 class="uk-section-title">Lifestyle Trends</h3>
		<div class="uk-child-width-1-3@s" data-uk-grid>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/620x360" alt="Image alt text">
					<a class="uk-position-cover" href="article.php" title="Link Title"></a>
				</div>
				<h4 class="uk-margin-top"><a href="article.php">All the Looks From the 2020 Golden Globes</a></h4>
				<div class="uk-article-meta uk-text-xsmall uk-margin-small">Jan 11, 2020 — By Tom Peters</div>
				<div class="uk-margin-top">Schemas for transparent e-business. Appropriately actualize 
					team building opportunities vis-a-vis collaborative information procedures.</div>
			</div>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/620x360" alt="Image alt text">
					<a class="uk-position-cover" href="article.php" title="Link Title"></a>
				</div>
				<h4 class="uk-margin-top"><a href="article.php">Everyone Wore Puff Sleeves at the Golden Globes</a></h4>
				<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Alex Grossman</div>
				<div class="uk-margin-top">Inexpensive schemas for transparent e-business. Appropriately actualize 
					team building opportunities vis-a-vis collaborative information procedures.</div>
			</div>
			<div>
				<div class="uk-inline">
					<img src="https://placehold.co/620x360" alt="Image alt text">
					<a class="uk-position-cover" href="article.php" title="Link Title"></a>
				</div>
				<h4 class="uk-margin-top"><a href="article.php">Gucci Marks the Lunar New Year With Mickey Mouse</a></h4>
				<div class="uk-article-meta uk-text-xsmall uk-margin-small">Feb 18, 2020 — By Jon Broll</div>
				<div class="uk-margin-top">Holisticly fabricate inexpensive schemas for transparent e-business. Appropriately actualize 
					team building opportunities vis-a-vis collaborative procedures.</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'fractions/footer.php' ?>
</body>

</html>
  <?php echo $js; ?>
