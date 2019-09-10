<?php

    // 当たり番号
    $line = fgets(STDIN);
    $atari = explode(" ",trim($line)); 
    
    // 購入枚数
    $buy = trim(fgets(STDIN));
    
    // 各くじ番号
    while ($input = fgets(STDIN)) {
        $kuzi[] = explode(" ",trim($input)); 
    }
    
    // 該当番号を抽出、出力のループ処理
    for ($i = 0; $i < $buy; $i++) {
        $hit = array_intersect($atari,$kuzi[$i]);
        echo count($hit) . PHP_EOL;
    }
    
    