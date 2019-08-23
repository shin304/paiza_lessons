<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input1 = fgets(STDIN);
    $line = explode(" ", trim($input1)); // 品数と生徒数
    // var_dump($line[0]);die();
    
    for ($i = 1; $i <= $line[0]; $i++) {
        $input2 = fgets(STDIN);
        $calorys[] = trim($input2); // カロリー
    }
    // var_dump($calorys);die();
    
    while ($input3 = fgets(STDIN)) {
        $amounts[] = explode(" ", trim($input3)); // グラム
    }     
    // var_dump($amounts);
    $sum = 0;
    foreach ($amounts as  $amount) { // 生徒一人当たりの摂取カロリーを求め、出力
        // var_dump($amount);
        for ($i = 0; $i < $line[1]; $i++) {
            $items = floor($amount[$i] * $calorys[$i] / 100);
            $sum += $items;
            
            
        }
        echo $sum;
        // var_dump($sum);
        // echo $items[$i];
    }
    // var_dump($items);