<?php

    while ($line = fgets(STDIN)) {
        $i[] = explode(" ",trim($line));
    }
    
    //入力例2の求め方が分かりません(入力例1は正解)
    $result = abs($i[0][0] * $i[1][0])  + abs($i[0][1] * $i[1][1]) - abs($i[1][0] * $i[1][1]);
    echo $result;