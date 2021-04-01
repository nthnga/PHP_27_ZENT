<?php
	require_once('connection.php');
	$id = $_GET['id'];

	// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from users WHERE id = ". $id;

	// Thực thi câu lệnh
    $result = $conn->query($query);

    // Trả về 1 bản ghi
    $users = $result->fetch_assoc();

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
 		<h1 class="text-center">Details</h1>
 		<a href="user.php" class="btn btn-primary">Back to home</a>
 		<div class="container" style="width: 65%" >
 			<p>ID : <?= $users['id'] ?></p>
 		 	<p>Name : <?= $users['name'] ?></p>
 		 	<p>Email : <?= $users['email'] ?></p>
 		 	<p>Creat_at : <?= $users['created_at'] ?></p>
 		 	<div class="row">
 		 		<p class="col-2">Avatar</p><br>
 		 		<img class="col-10" style="height: 100px; width: 100px" src="<?= $users['avatar'] ?>">
 		 	</div>
 		</div>
 	</div>
 </body>
 </html>