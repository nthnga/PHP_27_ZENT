<?php
	$n=5;
	$giaiThuaI = 1;;
        $s = 0;

        for ($i = 1; $i <= $n; $i++) {
            $giaiThuaI *= $i;
            $s += $i / $giaiThuaI;
        }
        echo "Tổng s = " . $s;
 ?>