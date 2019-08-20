<?php


    $num = fgets(STDIN);
    
    while($line = fgets(STDIN)) {
        $results[] = trim($line);
    }
    // var_dump($results);die();
    // 
    foreach ($results as $result) {
        $items = explode(" ", $result);
        // var_dump($items);die();
        
        // set add sub をわける
        $function = array_splice($items, 0, 1)[0];
        // var_dump($function);die();
        // var_dump($items);die();
        
        $answer1 = 0;
        $answer2 = 0;
        // var_dump($function);die();
        switch ($function) {
            case "SET" :
                if ($items[0] == 1) {
                    $answer1 = $items[1];
                    // var_dump($answer1);die();
                } elseif ($items[0] == 2) {
                    $answer2 = $items[1];
                    
                }
                // var_dump($answer2);die();
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