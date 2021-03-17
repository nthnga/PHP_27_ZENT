<?php
	
	session_start();
	$_SESSION['sanpham'] = array(
		'SP1' => array(
			'maSP' => 'SP1', 
			'tenSP' => 'IPhone5 32GB',
			'soLuong' => '50',
			'donGia' => '5000000',
			'thoiGian' => date('d/m/Y - H:i:s')
		),

		'SP2' => array(
			'maSP' => 'SP2', 
			'tenSP' => 'IPhone5 plus 32GB',
			'soLuong' => '350',
			'donGia' => '7000000',
			'thoiGian' => date('d/m/Y - H:i:s')
		),

		'SP3' => array(
			'maSP' => 'SP3', 
			'tenSP' => 'IPhone4 32GB',
			'soLuong' => '30',
			'donGia' => '4000000',
			'thoiGian' => date('d/m/Y - H:i:s')
		),

		'SP4' => array(
			'maSP' => 'SP4', 
			'tenSP' => 'IPhone6 32GB',
			'soLuong' => '250',
			'donGia' => '8000000',
			'thoiGian' => date('d/m/Y - H:i:s')
		),

		'SP5' => array(
			'maSP' => 'SP5', 
			'tenSP' => 'IPhone7 plus 32GB',
			'soLuong' => '10',
			'donGia' => '13000000',
			'thoiGian' => date('d/m/Y - H:i:s')
		),

	);

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
	<table border="1px" width="500px" height="100px" align="center" cellpadding="10px">
		<tr>
			<td colspan="3" style="text-align: center;">DANH SÁCH SẢN PHẨM</td>
			<td><a href="addGH.php">Xem giỏ hàng</a></td>
		</tr>
		<tr align="center">
			<td>ID</td>
			<td>Tên sản phẩm</td>
			<td>Đơn giá</td>
			<td>Hành động</td>
		</tr>
		
		<tbody>
			<?php
				$i = 0;
				foreach($_SESSION['sanpham'] as $key => $value){
				    $i++;
				?>

				<tr>
					<td><?php echo $_SESSION['sanpham'][$key]['maSP']; ?></td>
					<td><?php echo $_SESSION['sanpham'][$key]['tenSP']; ?></td>

					<td><?php echo $_SESSION['sanpham'][$key]['donGia']; ?></td>
					<td>
					<?php echo '<a class="btn btn-warning" href="addToCart.php?maSP='. $_SESSION['sanpham'][$key]['maSP'] .'">Add to cart</a>'; ?>
					</td>
				</tr>
				<?php } ?>
		</tbody>
		
	</table>
	
</body>
</html>