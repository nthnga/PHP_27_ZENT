<?php 
     session_start();
    if(isset($_POST['submit'])){
        $target_dir = "files/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["data"]["name"]); // link sẽ upload file lên
       
        if (move_uploaded_file($_FILES["data"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["data"]["name"]). "file đã được tải lên!";
            $info = array(
                'name' => $_POST['name'],
                'file_name' => basename( $_FILES["data"]["name"])

            );
            $_SESSION['files'][] = $info;
            header('Location: index.php');
        } else { // Upload file có lỗi 
            echo "Đã xảy ra lỗi khi tải tệp của bạn lên!";
        }
    }

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>

    <div class="container">
        <h2>Upload document</h2>
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="">Tên tài liệu</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="" name="data">
            </div> 
            <button  type="submit" name="submit" class="btn btn-primary"><a href="index.php"></a>Upload</button>
        </form>
    </div>
</body>
</html>
 