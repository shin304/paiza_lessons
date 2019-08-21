<?php


    $num = fgets(STDIN);
    
    while($line = fgets(STDIN)) {
        $results[] = trim($line);
    }

    $answer1 = 0;
    $answer2 = 0;
    foreach ($results as $result) {
        $items = explode(" ", $result);
        // set add sub をわける
        $function = array_splice($items, 0, 1)[0];

        switch ($function) {

            case "SET" :
                if ($items[0] == 1) {
                    $answer1 = $items[1];
                } elseif ($items[0] == 2) {
                    $answer2 = $items[1];
                }
                break;

            case "ADD" :
                $answer2 = $answer1 + $items[0];
                break;

            case "SUB" :
                $answer2 = $answer1 - $items[0];
                break;
        }
    }
    echo $answer1 . " " . $answer2;

    
    
?>