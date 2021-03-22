<?php
	session_start();
	// session_destroy();
	require('data.php');

	// echo "<pre>";
	// 	print_r($products);
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
		<h3 style="margin: 50px 0; text-align: center;">DANH SÁCH SẢN PHẨM</h3>

		<a href="cart.php" class="btn btn-success" role="button">Xem giỏ hàng>>></a>


		<table class="table" style="text-align: center;">
			<thead>
				<tr>
					<td style="font-weight: bold;" scope="col">Mã Sản Phẩm</td>
					<td style="font-weight: bold;" scope="col">Tên Sản Phẩm</td>
					<td style="font-weight: bold;" scope="col">Số Lượng</td>
					<td style="font-weight: bold;" scope="col">Giá Bán</td>
					<td style="font-weight: bold;" scope="col">Ảnh</td>
					<td style="font-weight: bold;" scope="col" style="text-align: center;">#</td>
				</tr>
			</thead>

			<tbody>
				<?php
					$i = 0;
					foreach ($products as $key => $product) {

				?>
				<tr>
					<!-- <td><?=$i; ?></td> -->
					<td><?=$product[0]; ?></td>
					<td><?=$product[1]; ?></td>
					<td><?=$product[2]; ?></td>
					<td><?=number_format($product[3]); ?></td>
					<td><?=$product[4]; ?></td>
					<td>
						<a class="btn btn-primary" href="addToCart.php?maSP=<?=$product[0] ?>" role="button">Thêm vào giỏ hàng</a>
						
					</td>
				</tr>
				<?php }
					$i++;
				?>

			</tbody>
		</table>
	</div>
</body>
</html>