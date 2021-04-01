<?php

    require_once('connection.php');

    // Tạo kết nối đến CSDL
    
$conn = new mysqli($servername, $username, $password, $dbname);

//Step2: Chuẩn bị câu lệnh truy vấn và thực thi câu lệnh
$query = "SELECT * FROM users"; //Câu lệnh truy vấn

$result = $conn->query($query); //Câu lệnh thực thi


//Step3: Tạo mảng chứa DL trả về
$users = array();

while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h3 class="text-center">--- Users ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New User</a>

        <?php echo(isset($_COOKIE['add_msg'])?$_COOKIE['add_msg']:'')?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Created_at</th>
                <th>Action</th>
            </thead>

            <?php foreach ($users as $user) {
            	
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                
                <td><?= $user['email'] ?></td>
                <td>
                    <img src="<?= $user['avatar'] ?>" width="100px" height="100px">
                </td>

                <td><?= $user['created_at'] ?></td>

                <td>
                    <a href="user_detail.php?id=<?= $user['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="user_edit.php?id=<?= $user['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="user_delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>