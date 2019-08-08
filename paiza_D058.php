<?php
   

    $line = trim(fgets(STDIN));
    $nums = explode(" ", $line);
    // var_dump($nums);
    
    // 改善点　foreachなどを使ったより簡単なプログラムの有無
    
   $A = str_repeat("A", $nums[0]);
   $B = str_repeat("B", $nums[1]);
   
   echo $A . $B . $A;
   
   // テストはclear
?>