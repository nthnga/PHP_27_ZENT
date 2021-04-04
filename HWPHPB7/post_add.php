<?php
    require_once('connection.php');

    //Step2: Chuẩn bị câu lệnh truy vấn và thực thi câu lệnh
    $query = "SELECT * FROM categories WHERE parent_id is NULL"; //Câu lệnh truy vấn

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

    <h3 align="center">---Add New posts---</h3>
    <hr>
        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">View_count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count">
            </div>
            
            <div class="form-group">
                <label for="">User_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id">
            </div>
            
            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at">
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>