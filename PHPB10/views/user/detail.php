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
 		<a href="index.php?mod=user&act=list" class="btn btn-primary">Back to home</a>
 		<div class="container" style="width: 65%" >
 			<p>ID : <?= $user['id'] ?></p>
 		 	<p>Name : <?= $user['name'] ?></p>
 		 	<p>Email : <?= $user['email'] ?></p>
 		 	<p>Creat_at : <?= $user['created_at'] ?></p>
 		 	<div class="row">
 		 		<p class="col-2">Avatar</p><br>
 		 		<img class="col-10" style="height: 100px; width: 100px" src="<?= $user['avatar'] ?>">
 		 	</div>
 		</div>
 	</div>
 </body>
 </html>