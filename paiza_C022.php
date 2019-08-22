<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num = fgets(STDIN);
    while ($line = fgets(STDIN)) {
        $lines[] = trim($line);
    }
    // $start = explode(" ", $lines[0])[0];
    // var_dump($lines);
    // $items = [];
    // $high = [];
    foreach ($lines as $line) {
        $items = explode(" ", $line);
    
            $start[] = $items[0];
            $last[] = $items[1];
            $high[] = $items[2];
            $low[] = $items[3];
            // var_dump($start);
            // var_dump($low);
            // 繰り返し格納されてしまうのを防ぎたい
        
      
                
    }
    // var_dump($start);
    echo reset($start) . " " . end($last) . " " . max($high) . " " . min($low);
    
    