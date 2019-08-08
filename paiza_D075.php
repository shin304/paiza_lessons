<?php
    

    while($input = fgets(STDIN)) {
        $nums[] = trim($input);
    }
    // var_dump($nums);
    
    // 手順1.配列に格納　2.5つの合計数を算出=15　3.15-$numsの合計値が足りない数字
    // 考え方合ってますか？
    
    foreach ($nums as $num) {
        $total += $num;
    }
    echo 15-$total;
    
    // clear
?>