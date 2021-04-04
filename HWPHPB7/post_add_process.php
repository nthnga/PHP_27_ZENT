 <?php 
	require_once('connection.php');

	// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

	// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO posts (title, description, thumbnail, slug, view_count, user_id, category_id, created_at) VALUES ('".$data['title']."','".$data['description']."','".$data['thumbnail']."','".$data['slug']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."','".$data['created_at']."')";

	// Thực thi câu lệnh
    $status = $conn->query($query);
	// echo "$query";
    if ($status == true) {
    	// echo "Thêm mới thành công!";
    	setcookie('add_msg', 'Thêm mới thành công!', time() + 5);
    	header('Location: post.php');
    }else{
    	// echo "Thêm mới thất bại!";
    	setcookie('add_msg', 'Thêm mới không thành công!', time() + 5);
    	header('Location: post.php');
    }
    
 ?>