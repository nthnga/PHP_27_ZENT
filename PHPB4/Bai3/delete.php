<?php 
	session_start();
	// Bước 1: Lấy được code cần xóa
	$id = $_GET['id'];

	unset($_SESSION['files'][$id]); 
	header("Location: index.php");
 ?>