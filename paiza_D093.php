<?php
    
    // 手順１. 与えられる4つの数字が全て同じであれば1111で割ることで、0-9までの数字のどれかがが答えになる
    // 2. if分使いそれが整数ならそのまま出力. 違えばNoと出力
    // 問題点 8/10でした。　解放がわかりません。
    
    $input = trim(fgets(STDIN));
    $num = $input / 1111;
    $init = gettype($num);
    // echo $init;
    
    if ($init == "integer") {
        echo $input;
    } else {
        echo "No";
    }
    // var_dump($init);
    
    // $init = $input / 1111;
    // $num = preg_match("/[0-9]/", $init);
    // echo $num;
    // echo $init; die();
    // var_dump($init); die();
    // if ($init == ) {
    //     echo $input;
    // }
    
?>