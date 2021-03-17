<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EX2</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="add_process.php" method="POST" role="form">

            <div class="form-group">
                <h3 style="text-align: center;">PHP - Lưu thông tin SV - SESSION</h3>
                
            </div>
            
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="msv" required>
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="hoTen" required>
            </div>  

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="sdt" required>
            </div>  

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="name@gmail.com" name="email" required>
            </div>  

            <div class="form-group">
                <label for="">Giới tính</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio1" value="Nam" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Nam</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio2" value="Nữ">
                    <label class="form-check-label" for="inlineCheckbox2">Nữ</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio3" value="Giới tính khác">
                    <label class="form-check-label" for="inlineCheckbox3">Giới tính khác</label>
                </div>
            </div> 

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="diaChi" required>
            </div>  
            
            <button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>