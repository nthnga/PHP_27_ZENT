<?php
    $id = $_GET['id'];
    require_once('connection.php');

    // $id = $_GET['id'];

    //Câu lệnh truy vấn
    $query = "SELECT * FROM categories WHERE id = ". $id;

    //Thực thi câu lệnh
    $result = $conn->query($query);
    // $result = $conn->query($query)->fetch_assoc();
    
    $category = $result->fetch_assoc();
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

    <h3 align="center">---Update Category---</h3>
    <hr>
        <form action="category_edit_process.php?id=<?= $category['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $category['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['name'] ?>">
            </div>

            <div class="form-group">
                <label for="">Parent_id</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="parent_id" value="<?= $category['parent_id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?= $category['parent_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>