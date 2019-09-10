<?php

    // 品数と生徒数
    $input1 = fgets(STDIN);
    $line = explode(" ", trim($input1)); 
    
    // 各カロリー
    for ($i = 1; $i <= $line[0]; $i++) {
        $input2 = fgets(STDIN);
        $calorys[] = trim($input2); 
    }
    
    // 食べたグラム数
    while ($input3 = fgets(STDIN)) {
        $amounts[] = explode(" ", trim($input3)); 
    }     
    
    // 一人ずつ計算
    // 一人の合計を出したらsumをリセット
    foreach ($amounts as  $amount) { 
        $sum = 0;
        for ($i = 0; $i < $line[0]; $i++) {
            $items = floor($amount[$i] * $calorys[$i] / 100);
            $sum += $items;
        }
     // まず一人目を出力
        echo $sum . PHP_EOL;
    }
    
    
    