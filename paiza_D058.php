<?php
   

//     $line = trim(fgets(STDIN));
//     $nums = explode(" ", $line);
//     // var_dump($nums);
    
//     // 改善点　foreachなどを使ったより簡単なプログラムの有無
    
//    $A = str_repeat("A", $nums[0]);
//    $B = str_repeat("B", $nums[1]);
   
//    echo $A . $B . $A;
   
//    // テストはclear

$input = trim(fgets(STDIN));
$items = explode(" ", $input);


$count = 1;
$answer;

foreach ($items as $item) {
    if ($count == 1) {
        for ($i = 1; $i <= $item; $i++) {
            if($i == 1) {
                $answer = "A";
            } else {
                $answer .= "A";
            }
        }
        $count++;
    } elseif ($count == 2) {
        for($i = 1; $i <= $item; $i++) {
            $answer .= "B";
        }
        $count++;
    } else {
        for ($i = 1; $i <= $item; $i++) {
            $answer .= "A";
             
        }
    }
        
}

        echo $answer;
        
        
        
        
?>