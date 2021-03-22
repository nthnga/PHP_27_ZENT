<?php
	session_start();

	$maSP = $_GET['maSP'];
	$type = $_GET['type'];

	if ($_SESSION['cart'][$maSP][2] > 1 && $type==0) {
		$_SESSION['cart'][$maSP][2] --;
	}else{
		unset($_SESSION['cart'][$maSP]);
	}

	header("Location: cart.php");
?>