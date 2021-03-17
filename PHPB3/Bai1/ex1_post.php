

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EX1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if (isset($_POST['msv'])) {
			$msv = $_POST['msv'];
		}

		if (isset($_POST['hoTen'])) {
			$hoTen = $_POST['hoTen'];
		}

		if (isset($_POST['sdt'])) {
			$sdt = $_POST['sdt'];
		}

		if (isset($_POST['email'])) {
			$email = $_POST['email'];
		}

		if (isset($_POST['gioiTinh'])) {
			$gioiTinh = $_POST['gioiTinh'];
		}

		if (isset($_POST['diaChi'])) {
			$diaChi = $_POST['diaChi'];
		}
	?>

	<div class="container">
		<h2 style="text-align: center;">Thông tin sinh viên</h2>

		<ul>
			<li>
				<span>Mã sinh viên: </span>
				<?php 
				    echo $msv; 
				?>
			</li>
			<li>
				<span>Họ và tên: </span>
				<?php 
				    echo $hoTen; 
				?>
			</li>
			<li>
				<span>Số điện thoại: </span>
				<?php 
				    echo $sdt; 
				?>
			</li>
			<li>
				<span>Email: </span>
				<?php 
				    echo $email;
				?>
			</li>
			<li>
				<span>Giới tính: </span>
				<?php 
				    echo $gioiTinh; 
				?>
			</li>
			<li>
				<span>Địa chỉ: </span>
				<?php 
				    echo $diaChi; 
				?>
			</li>
		</ul>
	</div>
</body>
</html>