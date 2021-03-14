<?php

	$name = 'Nguyễn Thùy Dương';

	$arr_name = explode(" ", $name); //tách họ tên thành mảng họ tên.

	$dem = count($arr_name);

	echo "Họ: " . $arr_name[0];
	echo "<br>";
	echo "Tên: " . $arr_name[$dem - 1];

	// //Lấy họ đệm
	$ho_dem = " ";
	for ($i = 0; $i < $dem; $i++) { 
		if ($i != 0 && $i != ($dem-1)) {
			$ho_dem = $ho_dem . $arr_name[$i] . " ";
		}
	}
	echo "<br>";
	echo "Đệm: " . $ho_dem;
?>