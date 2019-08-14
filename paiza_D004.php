<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    while($line = fgets(STDIN)) {
        $strings[] = trim($line);
    }
    // var_dump($strings);
    // 
     
    $answer;
    $count = 1;
    foreach ($strings as $string) {
        if ($count == 1) {
            $count++;
            continue;
        } elseif ($count == 2) {
            $answer = $string . ",";
            $count++;
            continue;
        }
        $answer .= $string . ",";
       
    }
    echo "Hello " . $answer . "." ;
    // 期待する出力　Hello Alice,Bob,Carol,Dave,Ellen.
    // 出力結果　　　Hello Alice,Bob,Carol,Dave,Ellen,.
    // 改善したい点　→　最後の","を　無くして"."だけ表示させたいが方法が分からない
?>