<?php

    $n = trim(fgets(STDIN));
    $key = trim(fgets(STDIN));
    while($input = fgets(STDIN)) {
        $items[] = trim($input);
    }
    // var_dump($key);die();
    // var_dump($items);die();
    
    foreach ($items as $item) {
        if (preg_match("/$key/", $item)) {
            echo $item . PHP_EOL;
        } else {
            echo "None";
            exit;
        }
         
    }
    
?>