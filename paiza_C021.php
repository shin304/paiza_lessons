<?php
    

    $input = trim(fgets(STDIN));
    $base = explode(" ", $input);
    $num = trim(fgets(STDIN));
    while ($line = fgets(STDIN)) {
        $items[] = trim($line);
    }
    // var_dump($items);
    foreach ($items as $item) {
        
        $pos = explode(" ",$item);
        
        // 条件式を満たすよう定義
        $r1 = $base[2] ** 2;
        $xcyc = ($pos[0] - $base[0]) ** 2 + ($pos[0] - $base[1]) ** 2;
        $xcyc = ($pos[0] - $base[0]) ** 2 + ($pos[0] - $base[1]) ** 2;
        $r2 = $base[3] ** 2;
        if ( $r1 <= $xcyc && $xcyc <= $r2) {
        
        // var_dump($base[3] ** 2);
        echo "yes" . PHP_EOL;
        } else {
        echo "no" . PHP_EOL;
        }
    }
    
?>