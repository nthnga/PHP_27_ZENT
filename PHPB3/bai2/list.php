<?php
	session_start();
	
	// if(isset($_SESION['info'])){
	// 	$info_arr=$_SESSION['info'];
	// }
	
	// unset($_SESSION['info']['']);
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";
?>


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
		<h2 style="margin: 50px 0; text-align: center;">DANH SÁCH NGƯỜI DÙNG</h2>

		<a href="add.php" class="btn btn-primary" role="button">Thêm mới</a>

		<?php
			if(isset($_COOKIE['msg'])){
			?>
				<div class="alert alert-success">
					<strong>Thông báo: </strong>
					<?php
						echo $_COOKIE['msg'];
					?>
				</div>
			<?php
				}
			?>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Mã sinh viên</th>
					<th scope="col">Họ và tên</th>
					<th scope="col">Action</th>
				</tr>
			</thead>

			<tbody>

				<?php
                    $i = 0;
                    foreach($_SESSION['info'] as $key => $value){
                     	$i++;
				?>

				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $_SESSION['info'][$key]['msv']; ?></td>
					<td><?php echo $_SESSION['info'][$key]['hoTen']; ?></td>
					<td>
						<a class="btn btn-success" href="detail.php?msv=<?php echo $value['msv']?>" role="button">Detail</a>
						<a class="btn btn-danger" href="delete.php?msv=<?php echo $value['msv']?>" role="button">Delete</a>
					</td>
				</tr>

				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>