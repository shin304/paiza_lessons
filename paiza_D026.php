<?php

while ($input = trim(fgets(STDIN))) {
    if ($input === "yes") {
        $yes[] = $input;
    } else {
        $no[] = $input;
    }
}
// var_dump($yes);
    
    echo count($no);