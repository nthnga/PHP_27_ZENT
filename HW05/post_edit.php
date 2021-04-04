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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">---Edit---</h3>
    
        <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $posts['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $posts['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $posts['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $posts['thumbnail'] ?>">
            </div>
           
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $posts['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?= $posts['view_count'] ?>">
            </div>
            <div class="form-group">
                <label for="">User_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id" value="<?= $posts['user_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id" value="<?= $posts['category_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?= $posts['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>