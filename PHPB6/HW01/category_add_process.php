<?php
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	require_once('connection.php');

	//DL từ form gán vào data
	$data = $_POST;

	//Câu lệnh truy vấn thêm DL
	$query = "INSERT INTO categories (name, parent_id, thumbnail, description) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['thumbnail']."','".$data['description']."')";

	// echo $query;

	// Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
    	// echo "Thêm mới thành công!";
    	setcookie('add_msg', 'Thêm mới thành công!', time() + 5);
    	header('Location: category.php');
    }else{
    	// echo "Thêm mới thất bại!";
    	setcookie('add_msg', 'Thêm mới không thành công!', time() + 5);
    	header('Location: category.php');
    }
?>