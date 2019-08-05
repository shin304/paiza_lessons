<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $i = trim(fgets(STDIN));
    $str = explode(" ", $i);
    
    if ($str[0] > $str[1]) {
        echo $str[0];
    }
    elseif($str[0] < $str[1]) {
        echo $str[1];
    }
    elseif ($str[0] == $str[1]) {
        echo "eq";
    }
?>