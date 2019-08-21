<?php


    $input = trim(fgets(STDIN));
    $string  = preg_replace("/( )/", "", $input );
    // var_dump($string);
    $items = str_split($string);
    // var_dump($items);
    
    if (count(array_unique($items)) == 1) {
        echo "Yes";
    } else {
        echo "No";
    }
    
    // var_dump($base);
?>