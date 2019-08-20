<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $n = trim(fgets(STDIN));
    $key = trim(fgets(STDIN));
    while($input = fgets(STDIN)) {
        $items[] = trim($input);
    }
    // var_dump($key);die();
    // var_dump($items);die();
    
    foreach ($items as $item) {
        if (preg_match("/$key/", $item)) {
            $arrays[] = $item;
        }  
    }
        // var_dump($array);
    if (count($arrays) >= 1) {
        foreach ($arrays as $array) {
            echo $array . PHP_EOL;
        }
    } else {
            echo "None";
        }
    
?>