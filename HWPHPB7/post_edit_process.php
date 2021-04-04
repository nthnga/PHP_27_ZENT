<?php
	//DL từ form gán vào data
	$data = $_POST;
	// $id = $_GET['id'];

	require_once('connection.php');


	//Câu lệnh truy vấn thêm DL
    $query = "UPDATE posts SET  title = '".$data['title']."', description='".$data['description']."', thumbnail = '".$data['thumbnail']."', slug = '".$data['slug']."',view_count = '".$data['view_count']."', user_id = '".$data['user_id']."', category_id = '".$data['category_id']."' , created_at = '".$data['created_at']."'   WHERE id = ".$data['id'];
	// echo $query;

	// Thực thi câu lệnh
    $status = $conn->query($query);

    // die;
    if ($status == true) {
    	// echo "Thêm mới thành công!";
    	setcookie('add_msg', 'Cập nhật thành công!', time() + 5);
    	header('Location: post.php');
    }else{
    	echo "Thêm mới thất bại!";
    	setcookie('add_msg', 'Cập nhật không thành công!', time() + 5);
    	header('Location: post.php');
    }
?> 