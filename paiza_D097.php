<?php
    

    $string = trim(fgets(STDIN));
    $stringNum = substr_count($string, 1);  //　副文字の出現回数を数える
    // var_dump($stringNum); die();
    
    // yesが出力されません！
    if($i >= 5) {
        echo "yes";
    }elseif($i < 5) {
        echo "no";
    }