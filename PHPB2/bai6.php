<?php

	//Kiểm tra chuỗi Palindrome
	function ktr_chuoi_Palindrome($str){
		if($str == strrev($str))
			return 1;
		else
			return 0;
	}
	echo ktr_chuoi_Palindrome('DuyenneyuD') . "<br>";
?>