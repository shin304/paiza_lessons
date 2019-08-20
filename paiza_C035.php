<?php

$num = trim(fgets(STDIN));
    while($input = fgets(STDIN)) {
        $results[] = trim($input);
    }
    // var_dump($results); die();
    $passMembers = 0;
    
    foreach ($results as $result) {
        // var_dump($result); die();
        $items = explode(' ', $result);
        // var_dump($items); die();
        $ls = array_splice($items, 0, 1)[0];
        // var_dump($items); die();
        
        // $coutn = 1;
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
                    // var_dump($passMembers);die();
                }
                break;
        }
    }
    
    echo $passMembers;