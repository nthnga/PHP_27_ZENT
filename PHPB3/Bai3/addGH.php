<?php
	session_start();

	// session_destroy();
	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Table</title>
</head>
<body>
	<table border="1px" width="800px" height="100px" align="center" cellpadding="10px">
		<tr>
			<td colspan="6"></td>
			<td><a href="listGH.php">Tiếp tục mua hàng</a></td>
		</tr>
		<tr>
			<td colspan="7" style="text-align: center;">Thông tin giỏ hàng</td>
		</tr>
		<tr align="center">
			<td>ID</td>
			<td>Tên sản phẩm</td>
			<td>Số lượng</td>
			<td>Đơn giá</td>
			<td>Thành tiền</td>
			<td>Thời gian cập nhật</td>
			<td></td>
		</tr>
		
		<tbody>
			<?php
				$tongTien = 0;
				foreach($_SESSION['product'] as $key => $value){
				?>

				<tr>
					<td><?php echo $_SESSION['product'][$key]['maSP']; ?></td>
					<td><?php echo $_SESSION['product'][$key]['tenSP']; ?></td>
					<td><?php echo $_SESSION['product'][$key]['soLuong']; ?></td>

					<td><?php echo $_SESSION['product'][$key]['donGia']; ?></td>
					<td><?php echo $_SESSION['product'][$key]['thanhTien']; ?></td>
					<td><?php echo $_SESSION['product'][$key]['thoiGian']; ?></td>
					<td><a href="delete.php?maSP=<?=$value['maSP']?>">Xóa khỏi giỏ hàng</a></td>
				</tr>
				<?php $tongTien += $_SESSION['product'][$key]['thanhTien']; } ?>

				<tr>
					<td colspan="4" style="text-align: center;">Tổng tiền</td>
					<td colspan="1"><?php echo $tongTien;?></td>
					<td colspan="2"></td>
				</tr>
		</tbody>
		
	</table>
	
</body>
</html>