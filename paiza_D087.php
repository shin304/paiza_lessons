<?php

// 標準入力より数値を取得

 $i = trim(fgets(STDIN));　//1行目を取得
 while ($line = fgets(STDIN)) { //2行目から取得
     $t[] = trim($line);
    }
    
$answer;
$count = 1;
foreach ($t as $item) {
    
    if ($count == 1) {
        $answer = $item;
        $count++;
        continue;
    }
    
    $answer = $answer.$item;
}

echo $answer;
