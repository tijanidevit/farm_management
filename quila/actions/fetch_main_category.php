<?php include_once '../class/main_category.class.php';
	$main_category = new Main_category();
	$output = '';
 	foreach ($main_category->fetch_main_categories() as $row){
	$output .= '<div class="col-md-2 col-6 my-1">
		<div class="category-box">
			<div class="text-center">
				<a href="sub_category.php?c='.$row['main_category_id'].'">
					<div class="card py-3" onclick="loadSubCategory">
						<div>
							<img class="category-icon" src="images/'.$row['main_category_icon'].'">
						</div>
						<p class="uk-article-meta uk-text-xsmall">'.$row['main_category'].'</p>
					</div>
				</a>
				<div class="category-hint">
					<p class=" text-light uk-text-xsmall font-weight-bold">'.$main_category->main_category_sub_num($row['main_category_id']).' Sub categories</p class="uk-article-meta uk-text-xsmall">&nbsp; 
						<!-- <button id="followBtn'.$row['main_category_id'].'"class="btn btn-sm btn-info" title="Follow '.$row['main_category'].'">+</button> -->
					</div>
				</div>
			</div>
		</div>';
	}
	//echo json_encode($output['p']);
	echo $output;
?>
