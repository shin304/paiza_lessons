<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $line = trim(fgets(STDIN));
    $box = explode(" ", $line);
    // var_dump($box[1]);die();
    
    $bases = str_split($box[2]);
    
    $roll = 0;
    
    if ($box[1] == $box[2]) {
        echo 0;
        exit;
    }
    
    for ($i = 0; $i <= count($bases); $i++) {
        
        // 抜き出した要素
        $pull = array_shift($bases); 
        // var_dump($pull);die();
        
        // 要素を追加
        array_push($bases, $pull); 
        // var_dump($bases);die();
        
        // 配列を結合
        $result = implode($bases);
        
        // 処理が終わったらカウント
        $roll++;
        // var_dump($roll);die();
        if ($box[1] == $result) {
            echo $roll;
            exit;
        }
        
        
    }    
    
    
?>