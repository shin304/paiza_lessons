<?php
    //  テストでは9/10正解だったのですがどうしても最後の一文が正解になりません

    //　修正前
    $input = trim(fgets(STDIN));
    $pai = 3.141592653589793;
    echo substr($pai, 0, $input + 2) . PHP_EOL;


    //  修正後　$pai を文字列に
    $input = trim(fgets(STDIN));
    $pai = "3.141592653589793";
    echo substr($pai, 0, $input + 2) . PHP_EOL;
?>