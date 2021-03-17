<?php 
	session_start();
	if (isset($_GET['maSP'])) {
		$maSP = $_GET['maSP'];
		unset($_SESSION['product'][$maSP]);
		header("Location: addGH.php");
	} else{
    	header("Location: addGH.php");
    }
 ?>