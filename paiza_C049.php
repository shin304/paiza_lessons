<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $num = fgets(STDIN);
    
    while ($line = fgets(STDIN)) {
        $Fs[] = trim($line);
    }
    // var_dump($Fs);
    
 
    // 1. 始めの階と1階との差を求める
    $first = $num - 1;
    
    // 2. 今いる階と次の階の差を足していくーーー（ここから分からない）ーーー
    foreach ($Fs as $F) {
        $sum += $F ;
    }        
    // var_dump($F);
    
    // 1+2
    echo $first + $sum;

?>