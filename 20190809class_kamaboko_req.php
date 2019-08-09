<?php

require_once '20190809class_construct.php';

$kamaboko = new Product('かまぼこ', '2019/08/09');
$chikuwa = new Product('ちくわ  ', '2019/08/10');

$kamabokoName = $kamaboko->getName();
$kamabokoDate = $kamaboko->getProductDate();

$chikuwaName = $chikuwa->getName();
$chikuwaDate = $chikuwa->getProductDate();

print "\n" . $kamabokoName . "は" . $kamabokoDate . "に製造されました" . "\n";
print $chikuwaName . "は" . $chikuwaDate . "に製造されました" . "\n" . "\n";
