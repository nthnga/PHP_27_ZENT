<?php
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$maSP=$_GET['maSP'];
	$soLuong = $_SESSION['product'][$_GET['maSP']]['soLuong'] + 1;
	$thanhTien = $soLuong * $_SESSION['sanpham'][$_GET['maSP']]['donGia'];
	$_SESSION['product'][$_GET['maSP']] = array (
    	'maSP' => $_GET['maSP'],
    	'tenSP' => $_SESSION['sanpham'][$_GET['maSP']]['tenSP'],
    	'soLuong' => $soLuong,
    	'thanhTien' => $thanhTien,
    	'donGia' =>  $_SESSION['sanpham'][$_GET['maSP']]['donGia'],
    	'thoiGian' => date('d/m/Y - H:i:s')
    );


	echo "<pre>";
	 	print_r($_SESSION['product']);
	echo "</pre>";

	
	header('Location: addGH.php');
 ?>

