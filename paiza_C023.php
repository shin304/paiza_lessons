<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $line = fgets(STDIN);
    $atari = explode(" ",trim($line)); // 当たり番号
    // var_dump($atari);die();
    
    // 購入枚数
    $buy = fgets(STDIN);
    
    while ($input = fgets(STDIN)) {
        $kuzi[] = explode(" ",trim($input)); // 各くじ番号
    }
    // var_dump($kuzi);
    // array_intersect
    
    // $hit = array_intersect($atari,$kuzi);
    
    //　番号が同じならhitに格納
    foreach ($kuzi as $value1) {
        foreach ($atari as $value2) {
            if ($value1 == $value2) {
                $hit[] = $value1;
                // var_dump($hit);
            }
            
        }
    }
    
    foreach ($hit as $value3) {
        
        echo count($value3) . PHP_EOL;
    }
    
    // foreach ($hits as $hit) {
    //     echo count()
    // }
?>