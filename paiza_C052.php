<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    while ($line = fgets(STDIN)) {
        $i[] = explode(" ",trim($line));
    }
    // var_dump($items[0]);
    
    $result = abs($i[0][0] * $i[1][0])  + abs($i[0][1] * $i[1][1]) - abs($i[1][0] * $i[1][1]);
    echo $result;