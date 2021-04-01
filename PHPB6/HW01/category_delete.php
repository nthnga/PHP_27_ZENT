<?php 
	require_once('connection.php');

	$id = $_GET['id'];

	// Câu lệnh truy vấn
    $query = "DELETE FROM categories WHERE id = ".$id;

    // Thực thi câu lệnh
    $status = $conn->query($query); 

    if($status == true){
		setcookie('add_msg','Xóa thành công!',time()+5);
		header('Location: category.php');
	}else{
		setcookie('add_msg','Xóa không thành công!',time()+5);
		header('Location: category.php');
	}
 ?>