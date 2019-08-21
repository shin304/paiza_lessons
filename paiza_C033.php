<?php

    // ・ストライクが 1 〜 2 つたまったとき → "strike!"
    // ・ストライクが 3 つたまったとき → "out!"
    // ・ボールが 1 〜 3 つたまったとき → "ball!"
    // ・ボールが 4 つたまったとき → "fourball!"
    
    // 配列に格納
    // 条件に合うように出力
    
    $num = trim(fgets(STDIN));
    while ($line = fgets(STDIN)) {
        $results[] = trim($line);
    }
    // var_dump($results);
    
    // ball strikeをそれぞれの個数分格納
    $ball = [];
    $strike = [];
    foreach ($results as $result) {
        
        // ballの数が3以下の時はball!と出力
        // ballの数が4の時はfourball!と出力
        // strikeの数が2以下の時はstrike!と出力
        // strikeの数が3の時はout!と出力
        if ($result == "ball") {
            echo "ball!" . PHP_EOL;
            $ball[] = $result;
            if (count($ball) == 3) {
                continue;
            }
        } elseif ($result == "strike") {
            echo "strike!" . PHP_EOL;
            $strike[] = $result;
            if (count($strike) == 2) {
                continue;
            }
        }
        
        
        if (count($ball) == 4) {
            echo "fourball!" . PHP_EOL;
        } elseif (count($strike) == 3) {
            echo "out!" . PHP_EOL;
        }
    }
    //  var_dump($ball);die();
    //  var_dump($strike);die();
?>