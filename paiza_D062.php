<?php
    
    // 手順　foreach と　if　文を使って攻略？
    // 不明点　解き方がわかりません
    
    
    $strings = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
    // $strings = "ABCDEFGHIJ";
    $input = trim(fgets(STDIN));
    $n = explode(" ", $input);
    
        // echo substr($strings, 0, $n[0]) . "\n";
        // echo substr($strings, $n[0], $n[1]) . "\n";
        // echo substr($strings, $n[1]+1);
    
    // var_dump($nums);
    $answer;
    $count = 1;
    foreach ($strings as $string) {
        if ($count == 1) {
            $answer = $string;
            $count++;
            continue;
        } elseif ($count == $n[0]) {
            $answer .= $string . "\n";
            $count++;
            continue;
        }
    //     } elseif ($count == $n[1]) {
    //         $answer .= $string . "\n";
    //         $count++;
    //         continue;
    //     $answer .= $string ;
    }
    echo $answer;
    
?>