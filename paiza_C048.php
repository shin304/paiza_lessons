<?php

    $input = fgets(STDIN);
    $num = explode(" ", trim($input));
    $base = $num[0];
    $sum = 0;
    
    while (!($base == 0)) {
        $result = floor($base * (1 - $num[1] * 0.01));
        $base = $result;
        $sum += $result;
    }
    $answer = $num[0] + $sum;
    echo $answer;
?>