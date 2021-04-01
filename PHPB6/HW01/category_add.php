<?php
    require_once('connection.php');

    //Step2: Chuẩn bị câu lệnh truy vấn và thực thi câu lệnh
    $query = "SELECT * FROM categories WHERE parent_id is NULL"; //Câu lệnh truy vấn

    $result = $conn->query($query); //Câu lệnh thực thi


    //Step3: Tạo mảng chứa DL trả về
    $categories = array();

    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

    <h3 align="center">---Add New Category---</h3>
    <hr>
        <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>

            <div class="form-group">
                <label for="">Danh mục cha</label>
                <select name="category" id="category" class="form-control">
                    <option value="0">Đây là danh mục cha</option>
                    <?php foreach ($categories as $cate){ ?>
                    
                        <option value="<?= $cate['id']?>"><?= $cate['name']?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Parent_ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>