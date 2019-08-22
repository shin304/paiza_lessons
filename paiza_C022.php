<?php

    $num = fgets(STDIN);
    while ($line = fgets(STDIN)) {
        $lines[] = trim($line);
    }
    
    foreach ($lines as $line) {
        $items = explode(" ", $line);
    
            $start[] = $items[0];
            $last[] = $items[1];
            $high[] = $items[2];
            $low[] = $items[3];
    }
    echo reset($start) . " " . end($last) . " " . max($high) . " " . min($low);
    
    