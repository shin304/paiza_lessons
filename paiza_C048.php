<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input = fgets(STDIN);
    $num = explode(" ", trim($input));
    // var_dump($num);
    $base = $num[0];
    $sum = 0;
    
    // 計算後の結果が0になったら処理を修了の指定方法が分からない　for文の中
    for ($i = 0; $i <= 1; $i++) {
        $result = floor($base * (1 - $num[1] * 0.01));
        $base = $result;
        // var_dump($base);
        $sum += $result;
    }
    $answer = $num[0] + $sum;
    echo $answer;
?>