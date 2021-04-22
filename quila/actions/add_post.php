<?php 
	echo addpost();
	function addpost()
	{
		if (isset($_POST['content'])) {
			session_start();
			include_once '../class/posts.class.php';
			include_once '../class/users.class.php';
			$post = new Posts();
			$user = new Users();

			$media = upload_file($_FILES['media'],'../post_media/');
			$user_id = $_SESSION['user_id'];
			$topic = $_POST['topic'];
			$content = $_POST['content'];
			$sub_category_id = $_POST['sub_category_id'];

			$user_rating = (int)($user->fetch_user_rating($user_id)['user_rating']) + 5;
			$topic = $_POST['topic'];

			if ($post->add_post($user_id,$sub_category_id,$topic,$content,$media)) {
				if ($user->update_user_rating($user_rating,$user_id)) {
					return 1;
				}
			}
			else{
				return 0;
			}
		}
	}


	function upload_file($file,$upload_link)
	{
		$file_name = rand(1000,9999).'-'.$file['name'];
		$file_name = str_replace(' ', '-', $file_name);
		$file_tmp = $file['tmp_name'];

		move_uploaded_file($file_tmp, $upload_link.$file_name);
		return $file_name;
	}
?>