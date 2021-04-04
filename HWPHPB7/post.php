<?php

	require_once('connection.php');
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Step2: Chuẩn bị câu lệnh truy vấn và thực thi câu lệnh
	$query = "SELECT * FROM posts"; //Câu lệnh truy vấn

	$result = $conn->query($query); //Câu lệnh thực thi


	//Step3: Tạo mảng chứa DL trả về
	$posts = array();

	while ($row = $result->fetch_assoc()) {
	    $posts[] = $row;
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New POSTS</a>

        <?php echo(isset($_COOKIE['add_msg'])?$_COOKIE['add_msg']:'')?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <!-- <th>Content</th> -->
                <th>Slug</th>
                <th>View_count</th>
                <th>User_id</th>
                <th>Category_id</th>
                <th>Created_at</th>
            </thead>

            <?php foreach ($posts as $pos) {
            	
            ?>
            <tr>
                <td><?= $pos['id'] ?></td>
                <td><?= $pos['title'] ?></td>
                <td><?= $pos['description'] ?></td>
                <td>
                    <img src="<?= $pos['thumbnail'] ?>" width="100px" height="100px">
                </td>

                <td><?= $pos['slug'] ?></td>
                <td><?= $pos['view_count'] ?></td>
                <td><?= $pos['user_id'] ?></td>
                <td><?= $pos['category_id'] ?></td>
                <td><?= $pos['created_at'] ?></td>

                <td>
                    <a href="post_detail.php?id=<?= $pos['id'] ?>" class="btn btn-primary" style="margin-bottom: 10px;">Detail</a>
                    <a href="post_edit.php?id=<?= $pos['id'] ?>" class="btn btn-success" style="margin-bottom: 10px;">Edit</a>
                    <a href="post_delete.php?id=<?= $pos['id'] ?>" class="btn btn-danger" style="margin-bottom: 10px;">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>