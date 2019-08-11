<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input = trim(fgets(STDIN));
    $date = explode(" ", $input);
    // var_dump($date); die();
    
    if (preg_match("/$date[1]/", $date[0])) {
        echo "Yes";
    } else {
        echo "No";
    }
?>