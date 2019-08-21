<?php

    $num = trim(fgets(STDIN));
    while ($line = fgets(STDIN)) {
        $results[] = trim($line);
    }
    $ball = [];
    $strike = [];
    foreach ($results as $result) {

        if ($result == "ball") {
            $ball[] = $result;
            if (count($ball) == 4) {
                echo "fourball!" . PHP_EOL;
                exit;
            }
            echo "ball!" . PHP_EOL;
        } elseif ($result == "strike") {
            $strike[] = $result;
            if (count($strike) == 3) {
                echo "out!" . PHP_EOL;
                exit;
            }
            echo "strike!" . PHP_EOL;
        }
    }
?>