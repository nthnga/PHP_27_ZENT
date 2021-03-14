<?php 
	$name = " Vu viet dUyen ";
	echo "Chuỗi ban đầu: " . $name;

	$name = strtolower($name); //Chuyển toàn bộ sang chữ thường

	$name = trim($name); //Cắt khoảng trắng ở đầu cuối

	$name = ucwords($name); //Viết hoa các chữ cái đầu.

	echo "<br>";
	echo "Chuỗi sau  khi chuẩn hóa là: " . $name . ".";
	
?>