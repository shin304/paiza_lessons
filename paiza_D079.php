<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $pass = trim(fgets(STDIN));
    $passArray = str_split($pass);
    $passNum = count (array_unique($passArray) );

    if ($passNum == 1) {
        echo "NG";
        exit;
    } 
    
    echo "OK";
  