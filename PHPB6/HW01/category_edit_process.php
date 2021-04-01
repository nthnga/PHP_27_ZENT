<?php
	//DL từ form gán vào data
	$data = $_POST;
	// $id = $_GET['id'];

	require_once('connection.php');


	//Câu lệnh truy vấn thêm DL
    $query = "UPDATE categories SET name = '".$data['name']."', description='".$data['description']."' WHERE id = ".$data['id'];
	echo $query;

	// Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
    	// echo "Thêm mới thành công!";
    	setcookie('add_msg', 'Cập nhật thành công!', time() + 5);
    	header('Location: category.php');
    }else{
    	echo "Thêm mới thất bại!";
    	setcookie('add_msg', 'Cập nhật không thành công!', time() + 5);
    	header('Location: category.php');
    }
?> 