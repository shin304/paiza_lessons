<?php

    // 自分の得意な言語で
    // Let's チャレンジ！！
    
    $dalls = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
    
    $input = trim(fgets(STDIN));
    $stepNums = explode(" ", $input);
    // var_dump($strings);
    
    for ($i = 0; $i < $stepNums[0]; $i++) {
        echo $dalls[$i];
    }
    echo PHP_EOL;
    for ($i = $stepNums[0]; $i < $stepNums[0] + $stepNums[1]; $i++) {
        echo $dalls[$i];
    }
    echo PHP_EOL;
    for ($i = $stepNums[0] + $stepNums[1]; $i < 10; $i++) {
        echo $dalls[$i];
    }
    echo PHP_EOL;
    
    // 手順　foreach と　if　文を使って攻略？
    // 不明点　解き方がわかりません
    
    
//     $strings = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
//     // $strings = "ABCDEFGHIJ";
//     $input = trim(fgets(STDIN));
//     $n = explode(" ", $input);
    
//         // echo substr($strings, 0, $n[0]) . "\n";
//         // echo substr($strings, $n[0], $n[1]) . "\n";
//         // echo substr($strings, $n[1]+1);
    
//     // var_dump($nums);
//     $answer;
//     $count = 1;
//     foreach ($strings as $string) {
//         if ($count == 1) {
//             $answer = $string;
//             $count++;
//             continue;
//         } elseif ($count == $n[0]) {
//             $answer .= $string . "\n";
//             $count++;
//             continue;
//         }
//     //     } elseif ($count == $n[1]) {
//     //         $answer .= $string . "\n";
//     //         $count++;
//     //         continue;
//     //     $answer .= $string ;
//     }
//     echo $answer;
    
// ?>