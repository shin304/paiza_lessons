<?php


    $input = fgets(STDIN);
    $nums = explode(" ", trim($input));
    
    // 0を表示
    $nums[0] = sprintf('%03d', $nums[0]);
    $nums[1] = sprintf('%03d', $nums[1]);
    // var_dump($nums[0]);

    // 1の位
    $nums1 = substr($nums[0], -1 ,1) + substr($nums[1], -1 ,1);
    if ($nums1 >= 10) {
        $result1 = $nums1 - 10;
    } else $result1 = $nums1;
    
    // 10の位
    $nums10 = substr($nums[0], -2 ,1) + substr($nums[1], -2 ,1); 
    if ($nums10 >= 10) {
        $result10 = $nums10 - 10;
    } else $result10 = $nums10;
    
    // 100の位
    $nums100 = substr($nums[0], -3 ,1) + substr($nums[1], -3 ,1);
    if ($nums100 >= 10) {
        $result100 = $nums100 - 10;
    } else $result100 = $nums100;
    
    // 整数値にして出力
    echo intval($result100 . $result10 . $result1);

    // 0がすべて消えてしまうのが問題
    // 例 014　➡　14
    // 文字列として出力する？
 ?>