<?php
    $num = 2332;
    $str = (string)($num);
    $sum = 0;

    for($i = 0; $i < strlen($str); $i++){
        $sum += $str[$i];
    }

    echo "Sum of ".$num." digit is : ".$sum;
?>