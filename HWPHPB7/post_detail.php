<?php
	require_once('connection.php');
	$id = $_GET['id'];

	// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from posts WHERE id = ". $id;

	// Thực thi câu lệnh
    $result = $conn->query($query);

    // Trả về 1 bản ghi
    $posts = $result->fetch_assoc();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<h1 class="text-center">---Details---</h1>
 		<a href="post.php" class="btn btn-primary">Back to home</a>
 		<div class="container" style="width: 65%" >
 			<p>ID : <?= $posts['id'] ?></p>
 		 	<p>Title : <?= $posts['title'] ?></p>
 		 	<p>Description : <?= $posts['description'] ?></p>
 		 	<div class="row">
 		 		<p class="col-2">Thumbnail</p>
 		 		<img class="col-10" style="height: 100px; width: 100px" src="<?= $posts['thumbnail'] ?>">
 		 	</div>
            <p>Slug : <?= $posts['slug'] ?></p>
            <p>View_count : <?= $posts['view_count'] ?></p>
            <p>User_id : <?= $posts['user_id'] ?></p>
            <p>Category_id : <?= $posts['category_id'] ?></p>
            <p>Created_at : <?= $posts['created_at'] ?></p>
 		</div>
 	</div>
 </body>
 </html>