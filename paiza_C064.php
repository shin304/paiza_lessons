<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input1 = fgets(STDIN);
    $line = explode(" ", trim($input1));　// 品数と生徒数
    // var_dump($line[0]);die();
    
    for ($i = 1; $i <= $line[0]; $i++) {
        $input2 = fgets(STDIN);
        $calorys[] = trim($input2); // カロリー
    }
    
    while ($input3 = fgets(STDIN)) {
        $amounts[] = explode(" ", trim($input3));　// グラム
        
    }        
    // var_dump($amount[0][0]);
    $sum = 0;
    foreach ($calorys as  $calory) { // 生徒一人当たりの摂取カロリーを求め、出力
        // var_dump($amount);
        $sum += $calory * $amount;
    }
    echo $sum;

    
?>