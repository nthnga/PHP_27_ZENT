<?php 
    require_once('connection.php');

    // Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

    // Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO users (name, password, email,avatar, created_at) VALUES ('".$data['name']."','".$data['password']."','".$data['email']."','".$data['avatar']."','".$data['created_at']."')";

    // Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
        // echo "Thêm mới thành công!";
        setcookie('add_msg', 'Thêm thành công!', time() + 5);
        header('Location: user.php');
    }else{
        echo "Thêm mới thất bại!";
        setcookie('add_msg', 'Thêm không thành công!', time() + 5);
        header('Location: user.php');
    }
 ?>