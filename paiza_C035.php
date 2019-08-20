<?php

$num = trim(fgets(STDIN));
    while($input = fgets(STDIN)) {
        $results[] = trim($input);
    }
    
    $passMembers = 0;
    foreach ($results as $result) {
        $items = explode(' ', $result);
        $ls = array_splice($items, 0, 1)[0];
        
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item;
        }
        
        if (!($sum >= 350)) {
            continue;
        }
        
        switch ($ls) {
            case 's':
                if (($items[1] + $items[2]) >= 160) {
                    $passMembers++;
                    var_dump($passMembers);die();
                }
                break;
            case 'l':
                if (($items[3] + $items[4]) >= 160) {
                    $passMembers++;
                }
                break;
        }
    }
    
    echo $passMembers;