<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $order = explode(" ",trim(fgets(STDIN)));
    $self = trim(fgets(STDIN));
    $order[] = $self;
    // var_dump($order);die();
    sort($order);
    // var_dump($order);
    echo array_search($self, $order) + 1;
?>