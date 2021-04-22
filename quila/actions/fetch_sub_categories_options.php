<?php 

if (isset($_POST['main'])) {
	$main_category_id = $_POST['main'];
	include_once '../class/sub_category.class.php'; 
	$sub_category = new Sub_category();
	$sub_category_row = $sub_category->fetch_sub_categories($main_category_id);
	foreach ($sub_category_row as $key) {
		echo "<option value='".$key['sub_category_id']."'>".$key['sub_category']."</option>";
	}
	
}

?>