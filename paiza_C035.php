<?php
    
    // 

    $class = fgets(STDIN);
    while($line = fgets(STDIN)) {
        $tests[] = explode(" ", trim($line));
     }
     
    //  var_dump($total);die();
    
     // 専攻科目
     $sennkou = $tests[0][0];
     // 理系科目合計
     $border1 = $tests[0][2] + $tests{0}[3];
     // 文系科目合計
     $border2 = $tests[0][4] + $tests{0}[5];
     // 5教科合計
     $total = $tests[0][1] + $tests[0][2] + $tests[0][3] + $tests[0][4] + $tests[0][5];
     
    //  $goukaku = [];
     $count = 1;
     $student = 1;
     $goukaku = [];
     foreach ($tests as $test) {
        //  var_dump($sennkou);die();
     if ($count == 1) {
         if ($sennkou == "s") {
             if ($border1 >= 160 && $total >= 350) {
                 $goukaku[$student] = $test;
                 $count++;
                 continue;
                //  var_dump($pass);die();
             }
         }
     } elseif ($count == 2) {
         if ($sennkou == "l") {
             if ($border2 >= 160 && $total >= 350) {
                 $goukaku[$student] = $test;
                 $count++;
                //   var_dump($pass);die();
             }
         }
     }
          
     }
    //  配列goukakuに格納してある数を出力
     echo count($goukaku);
    //  var_dump($goukaku);
    // var_dump($tests);
?>