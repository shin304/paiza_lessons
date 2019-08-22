<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $num = fgets(STDIN);
    while ($line = fgets(STDIN)) {
        $lines[] = trim($line);
    }
    
    // var_dump($lines);
    // $items = [];
    foreach ($lines as $line) {
        $items = explode(" ", $line);
        
        //  start last high low を設定し出力
        // 配列であればreset end max minで出力可能
        // 配列でない場合の出力方法が不明
        
                
    }
    
?>