<?php
	$a = 4;
	$b = 5;

    echo "Phương trình: " . $a . "x + " . $b . " = 0";

   if ($a == 0) {
        if ($b == 0) {
            echo "<br>Phương trình có vô số nghiệm.";
        } else {
            echo "<br>Phương trình vô nghiệm.";
        }
    } else {
        echo "<br>Phương trình có nghiệm x = -$b / $a";
    }
 ?>