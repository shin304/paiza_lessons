<?php


    // ーーーーーーーーーーー修正後ーーーーーーーーーーーーーー

    $input = trim(fgets(STDIN));
    $arry = str_split($input);
    // var_dump($arry);
    if ($arry[0] == $arry[1] &&   $arry[1] == $arry[2] && $arry[2] == $arry[3]) {
        echo $input;
    } else {
        echo "No";
    }
    
    //　ーーーーーーーーーーー修正前ーーーーーーーーーーーーーー

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