<?php
    
    $num = trim(fgets(STDIN));
    while ($line = trim(fgets(STDIN))) {
        $items[] = explode(" ", $line);
    }
    
    $count = 0;
    foreach ($items as $item) {
        if ($item[0] == $item[1]) {
            $count += 2;
        // 文字列の長さが同じかつ一文字だけ異なる場合、2文字以上異なる場合で条件分岐のやり方が分からない
        } elseif (mb_strlen($item[0]) == mb_strlen($item[1])) {
            $count += 1 ;
        } else {
            continue;
        }
    }
    echo $count;
    