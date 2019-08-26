<?php
    
    $input = fgets(STDIN);
    $base = explode(" ",trim($input));
    $num = trim(fgets(STDIN));
    while ($line = fgets(STDIN)) {
        $items[] = trim($line);
    }
    foreach ($items as $item) {
        
        $pos = explode(" ",$item);
        
        // 条件式を満たすよう定義
        $r1 = $base[2] ** 2; // 
        $xcyc = (($pos[0] - $base[0]) ** 2) + (($pos[1] - $base[1]) ** 2);
        $r2 = $base[3] ** 2;
        
        if ( $r1 <= $xcyc && $xcyc <= $r2) {
        echo "yes" . PHP_EOL;
        } else {
        echo "no" . PHP_EOL;
        }
    }