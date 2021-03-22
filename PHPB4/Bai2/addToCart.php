<?php
	require('data.php');
	session_start();

	//lấy sản phảm mà khách hàng chọn
	$maSP = $_GET['maSP'];

	if (isset($_SESSION['cart'][$maSP])) {
		$_SESSION['cart'][$maSP][2]++;
	}else{
		$product = $products[$maSP];
	 // echo "$maSP";
	 // 
	 $product[2] = 1; //Xét số lượng sản phẩm về 1 khi mà KH chọn mua SP
	 
	 $_SESSION['cart'][$maSP] = $product;

	}

	 echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	header("Location: cart.php");
	
?>