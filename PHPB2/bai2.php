<?php
	$arr = array(1,4,2,6,9,100,4);

	echo "Mảng ban đầu: ";


	$reversed = array_reverse($arr);

	echo "<pre>";
    	print_r($arr);
	echo "</pre>";
 	
 	echo "Mảng sau khi đảo ngược là: ";

	echo "<pre>";
    	print_r($reversed);
	echo "</pre>";
?>
