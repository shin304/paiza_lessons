<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input = fgets(STDIN);
    $nums = explode(" ", trim($input));
    // var_dump($nums);die();
    
    // 合計値を出す
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    
    // 1の位の計算
    $nums1 = substr($nums[0], -1 ,1) + substr($nums[1], -1 ,1);
    $num1 = substr($nums1, -1 ,1);
    
    // 10の位の計算
    $nums10 = substr($nums[0], -2 ,1) + substr($nums[1], -2 ,1);
    $num10 = substr($nums10, -1 ,1);
    
    // 100の位の計算
    $nums100 = substr($nums[0], -3 ,1) + substr($nums[1], -3 ,1);
    $num100 = substr($nums100, -1 ,1);
    
    //  それぞれ出力
    echo $num100 . $num10 . $num1;
    
    
?>