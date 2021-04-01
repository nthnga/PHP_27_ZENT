<?php 
    $data = $_POST;

    require_once('connection.php');

    $query = "UPDATE users SET name='".$data['name']."' ,email='".$data['email']."' ,password='".$data['password']."' ,avatar='".$data['avatar']."' ,created_at='".$data['created_at']."' WHERE  id = ".$data['id'];

    $status = $conn->query($query);

    // echo $query;

    if ($status == true) {
        // echo "Thêm mới thành công!";
        setcookie('add_msg', 'Cập nhật thành công!', time() + 5);
        header('Location: user.php');
    }else{
        echo "Thêm mới thất bại!";
        setcookie('add_msg', 'Cập nhật không thành công!', time() + 5);
        header('Location: user.php');
    }
 ?>