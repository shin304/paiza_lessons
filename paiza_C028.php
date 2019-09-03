<?php
    
    $input = trim(fgets(STDIN));
    while ($line = trim(fgets(STDIN))) {
        $items[] = explode(" ", $line);
    }

    $count = 0;
    foreach ($items as $item) {

        if ($item[0] == $item[1]) {
            $count += 2;
        }
        
        // 文字列の長さが同じかつ一文字だけ異なる場合、2文字以上異なる場合
        if (mb_strlen($item[0]) == mb_strlen($item[1])) {
            
            $miss = 0;

            // for文を回すために回す回数を取得
            $num = mb_strlen($item[0]);

            for ($i = 0; $i < $num; $i++) {
                // 二つの文字列を一文字ずつ確認
                $str1 = substr($item[0], $i, 1);
                $str2 = substr($item[1], $i, 1);
                // 文字が異なれば格納
                if ($str1 !== $str2) {
                    $miss += 1;
                }
            }
            if ($miss == 1) {
                $count += 1;
            }
        }
    }
    echo $count;
    