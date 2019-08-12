<?php
    //  テストでは9/10正解だったのですがどうしても最後の一文が正解になりません

    $input = trim(fgets(STDIN));
    $pai = 3.141592653589793;
    echo substr($pai, 0, $input + 2) . PHP_EOL;
?>