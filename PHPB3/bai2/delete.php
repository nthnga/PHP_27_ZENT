<?php
	session_start();
	if(isset($_GET['msv'])){
		$msv=$_GET['msv'];
		unset($_SESSION['info'][$msv]);
	}

	setcookie('msg', 'Xóa thành công.',time()+5);
	header("Location: list.php");
?>