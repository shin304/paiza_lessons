<?php

    $input = trim(fgets(STDIN));
    $nums = explode(" ", $input);
    $a = $nums[0];
    $b = $nums[2];
    $c = $nums[4];
    $mark = $nums[1];
    
    if ($a == "x") {
        if ($mark == "+") {
            $x = $c - $b;
        } else {
            $x = $c + $b;
        }
    }
    
    if ($b == "x") {
        if ($mark == "+") {
            $x = $c - $a;
        } else {
            $x = $a - $c;
        }
    }
    
    if ($c == "x") {
        if ($mark == "+") {
            $x = $a + $b;
        } else {
            $x = $a - $b;
        }
    }
    echo $x;
?>