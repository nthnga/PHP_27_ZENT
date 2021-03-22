<?php
	session_start();
	$products = $_SESSION['cart'];
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
		<h3 style="margin: 50px 0; text-align: center;">DANH SÁCH GIỎ HÀNG ĐÃ CHỌN</h3>

		<a href="TrangChu.php" class="btn btn-success" role="button">Quay lại trang chủ>>></a>


		<table class="table" style="text-align: center;">
			<thead>
				<tr>
					<td style="font-weight: bold;" scope="col">Mã Sản Phẩm</td>
					<td style="font-weight: bold;" scope="col">Tên Sản Phẩm</td>
					<td style="font-weight: bold;" scope="col">Số Lượng</td>
					<td style="font-weight: bold;" scope="col">Giá Bán</td>
					<td style="font-weight: bold;" scope="col">Thành tiền</td>
					<td style="font-weight: bold;" scope="col">Ảnh</td>
					<td style="font-weight: bold;" scope="col" style="text-align: center;">#</td>
				</tr>
			</thead>

			<tbody>
				<?php
					$i = 0;
					$tongTien = 0;
					foreach ($products as $key => $product){
						$tongTien += $product[3]*$product[2];
				?>
				<tr>
					<!-- <td><?=$i; ?></td> -->
					<td><?=$product[0]; ?></td>
					<td><?=$product[1]; ?></td>
					<td>
						<a href="addToCart.php?maSP=<?=$product[0] ?>" class="btn btn-success" role="button">+</a>
						<?=$product[2]; ?>
						<a href="delete.php?maSP=<?=$product[0] ?>&type=0" class="btn btn-warning" role="button">-</a>
					</td>
					<td><?=number_format($product[3]); ?></td>
					<td><?=number_format($product[3]*$product[2]); ?></td>
					<td><?=$product[4]; ?></td>
					<td>
						<a class="btn btn-primary" href="delete.php?maSP=<?=$product[0] ?>&type=1" role="button">Xóa khỏi giỏ hàng</a>
						
					</td>
				</tr>
				<?php }
					$i++;
				?>

				<tr>
					<th colspan="4" style="font-weight: bold; text-align: center;" >Tổng tiền</th>
					
					<th lspan="3" style="text-align: center;"><?=number_format($tongTien); ?></th>
					<td></td>
					<td></td>
				</tr>

			</tbody>
		</table>
	</div>
</body>
</html>