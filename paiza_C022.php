<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num = fgets(STDIN);
    while ($line = fgets(STDIN)) {
        $lines[] = trim($line);
    }
    
    // var_dump($lines);
    // $items = [];
    // $high = [];
    foreach ($lines as $line) {
        $items = explode(" ", $line);
    
        $start[] = $items[0];
        $last[] = $items[1];
        $high[] = $items[2];
        $low[] = $items[3];
        // var_dump($last);
        // var_dump($low);
        
      
                
    }
    echo reset($start) . " " . end($last) . " " . max($high) . " " . min($low);
    
    