<?php
   

    $input = trim(fgets(STDIN));
    $seasons = explode(" ", $input);
    // var_dump($seasons);die;
    
    $s = 0;
    $w = 0;
    
    foreach ($seasons as $season) {
        
        if ($season ==  'S') {
           $s[] = $season;
           $s++;
        } elseif ($season == 'W') {
           $w[] = $season;
           $w++;
          }
    }
    //   var_dump($w);die();
    if ($w >= 5) {
        echo "OK";
    } elseif ($w <= 4) {
        echo "NG";
    }
   