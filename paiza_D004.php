<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    
    // $num = trim(fgets(STDIN));
    while($line = fgets(STDIN)) {
        $strings[] = trim($line);
    }
    
     $num = array_splice($strings, 0, 1)[0];
     $count = 1;
     echo "Hello ";
     
    foreach ($strings as $string) {
        if ($count == $num) {
            echo $string . ".";
            continue;
        }
        echo $string . ",";
        $count++;
        // continue;
    }