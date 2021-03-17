<?php

	session_start();

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

		$_SESSION['info'][$msv]=[
			'msv'=>$msv, 
			'hoTen'=>$hoTen, 
			'sdt'=>$sdt, 
			'email'=>$email, 
			'gioiTinh'=>$gioiTinh,
			'diaChi'=>$diaChi,
		];

		setcookie('msg','Thêm mới thành công.',time()+5);
		header('Location: list.php');
?>