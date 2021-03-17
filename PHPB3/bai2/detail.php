<?php
    session_start();
    if (isset($_GET['msv'])) {
        $msv=$_GET['msv'];
    }

    if (isset($_SESSION['info'])) {
        $info_arr=$_SESSION['info'][$msv];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EX2</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <h3 style="text-align: center;">THÔNG TIN SINH VIÊN</h3>
        
        <ul>
            <li>
                <span>Mã sinh viên: </span>
                <?php 
                    echo $info_arr['msv']; 
                ?>
            </li>
            <li>
                <span>Họ và tên: </span>
                <?php 
                    echo $info_arr['hoTen']; 
                ?>
            </li>
            <li>
                <span>Số điện thoại: </span>
                <?php 
                    echo $info_arr['sdt']; 
                ?>
            </li>
            <li>
                <span>Email: </span>
                <?php 
                    echo $info_arr['email'];
                ?>
            </li>
            <li>
                <span>Giới tính: </span>
                <?php 
                    echo $info_arr['gioiTinh']; 
                ?>
            </li>
            <li>
                <span>Địa chỉ: </span>
                <?php 
                    echo $info_arr['diaChi']; 
                ?>
            </li>
        </ul> 

    </div>
</body>
</html>