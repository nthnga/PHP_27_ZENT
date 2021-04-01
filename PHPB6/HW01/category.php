<?php

//Step1: Kết nối CSDL
// Thong so ket noi CSDL
	
$servername = "127.0.0.1"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root";   // Tên đăng nhập
	
$password = "";    // Mật khẩu truy cập
	
$dbname = "mysql_php_27zent";   // Tên cơ sở dữ liệu muốn kết nối đến

	
// Tạo kết nối đến CSDL
	
$conn = new mysqli($servername, $username, $password, $dbname);

//Step2: Chuẩn bị câu lệnh truy vấn và thực thi câu lệnh
$query = "SELECT * FROM categories"; //Câu lệnh truy vấn

$result = $conn->query($query); //Câu lệnh thực thi


//Step3: Tạo mảng chứa DL trả về
$categories = array();

while ($row = $result->fetch_assoc()) {
	$categories[] = $row;
}

//Step 4: Duyệt mảng dữ liệu và hiển thị lên giao diện
// foreach ($categories as $item) {
//      echo "<pre>";
//           print_r($item);
//      echo "</pre>";
// }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="category_add.php" class="btn btn-primary">Add New Category</a>

        <?php echo(isset($_COOKIE['add_msg'])?$_COOKIE['add_msg']:'')?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Parent_id</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php foreach ($categories as $cate) {
            	
            ?>
            <tr>
                <td><?= $cate['id'] ?></td>
                <td><?= $cate['parent_id'] ?></td>
                <td><?= $cate['name'] ?></td>
                <td>
                    <img src="<?= $cate['thumbnail'] ?>" width="100px" height="100px">
                </td>

                <td><?= $cate['description'] ?></td>

                <td>
                    <a href="category_detail.php?id=<?= $cate['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?id=<?= $cate['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>