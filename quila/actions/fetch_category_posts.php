<?php 

include_once '../class/sub_category.class.php';
$sub_category = new Sub_category();
$sub_category_id = $_POST['sub_category_id'];
$sub_category_posts = $sub_category->fetch_sub_category_posts($sub_category_id);
if (!empty($sub_category_posts)) {
		
	foreach ($sub_category_posts as $categories_row){ ?>
				
				<div data-uk-grid class="comment-items" id="<?php echo $categories_row['post_id'] ?>">
					<div class="uk-width-1-3@s uk-width-1-2@m uk-flex uk-flex-middle">
						<div class="uk-inline">
							<img src="post_media/<?php echo $categories_row['media'] ?>" class='sub_category-list-img' alt="<?php echo $categories_row['topic'] ?>">
							<a class="uk-position-cover" href="article.php?p=<?php echo $categories_row['post_id'] ?>" title="<?php echo $categories_row['topic'] ?>"></a>
						</div>
					</div>
					<div class="uk-width-expand@s uk-flex uk-flex-middle">
						<div>
							<h3 class="uk-h2 uk-margin-remove-top"><a href="article.php?p=<?php echo $categories_row['post_id'] ?>">
							<?php echo $categories_row['topic'] ?></a></h3>
							<p class="uk-text-content uk-width-4-5@m uk-visible@l">
								<?php echo substr($categories_row['content'], 0,300)  ?> ......</p>
							<div class="uk-article-meta uk-text-xsmall"><?php echo date('F j, Y, g:i a',(int)$categories_row['post_time']) ?> — By <a href="profile.php?u=<?php echo $categories_row['username'] ?>"><?php echo $categories_row['firstname'].' '. $categories_row['othernames']?></a></div>
							<div class="uk-margin-top">
								<a href="article.php?p=<?php echo $categories_row['post_id'] ?>" class="hvr-forward uk-visible@m">Read Now &#10230;</a>
							</div>
						</div>
					</div>
				</div>
				<hr class="uk-margin-medium">

		 <?php 
		}
	}

	else{
		echo 0;
	}

	  ?>
	