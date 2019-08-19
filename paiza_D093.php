<?php
    

    $input = fgets(STDIN);
    $pass = str_split(trim($input));
    $passNum = array_unique($pass);
    // print_r($passNum);die();
    
    // var_dump($pass);    
    if (count($passNum) !== 1) {
        echo "No";
    } else {
        echo $input;
    }
?>