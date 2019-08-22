<?php

    $num = fgets(STDIN);
    while ($line = fgets(STDIN)) {
        $stairs[] = trim($line);
    }
    $now = 1;
    $sum = 0;
    // 今いる階と前の階の差を足していく
    foreach ($stairs as $stair) {
        
        $sum += abs($stair - $now);
        $now = $stair;
    }        
    echo $sum;

?>