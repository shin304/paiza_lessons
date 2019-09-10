<?php

    $line = trim(fgets(STDIN));
    $box = explode(" ", $line);
    $bases = str_split($box[2]);
    $roll = 0;
    
    if ($box[1] == $box[2]) {
        echo 0;
        exit;
    }
    
    for ($i = 0; $i <= count($bases); $i++) {
        
        // 抜き出した要素
        $pull = array_shift($bases); 
        
        // 要素を追加
        array_push($bases, $pull); 
        
        // 配列を結合
        $result = implode($bases);
        
        // 処理が終わったらカウント
        $roll++;
        if ($box[1] == $result) {
            echo $roll;
            exit;
        }
    }    
    
    
?>