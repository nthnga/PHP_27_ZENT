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
 		<a href="category.php" class="btn btn-primary">Back to categories</a>
 		<div class="container" style="width: 65%" >
 			<p>ID : <?= $cate['id'] ?></p>
 		 	<p>Name : <?= $cate['name'] ?></p>
 		 	<p>ParentID : <?= $cate['parent_id'] ?></p>
 		 	<p>Description : <?= $cate['description'] ?></p>
 		 	<div class="row">
 		 		<p class="col-2">Thumbnail</p><br>
 		 		<img class="col-10" style="height: 200px; width: 200px" src="<?= $category['thumbnail'] ?>">
 		 	</div>
 		</div>
 	</div>
 </body>
 </html>