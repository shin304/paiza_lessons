<?php
$items = explode(' ', trim(fgets(STDIN)));
// 各数字を一文字ずつ配列にして、逆順にする ← 桁数を揃えるときに必要
$item1 = array_reverse(str_split($items[0]));
$item2 = array_reverse(str_split($items[1]));

// 桁数を揃える
if (count($item1) > count($item2)) {
    $item2 = alignLength($item1, $item2);
} elseif (count($item2) > count($item1)) {
    $item1 = alignLength($item2, $item1);
}

$onesPlace;
$tensPlace;
$hundredsPlace;

// 一桁ずつ計算する
for ($i = 0; $i <= 2; $i++) {
    // 両方とも NULL の場合は計算しない
    if ($item1[$i] == NULL && $item2[$i] == NULL) {
        continue;
    }

    // 一の位
    if ($i == 0) {
        // 合計が 10 以上の場合、十の位を無視
        $onesPlace = calculation($item1, $item2, $i);
        // 十の位
    } elseif ($i == 1) {
        $tensPlace = calculation($item1, $item2, $i);
        // 百の位
    } else {
        $hundredsPlace = calculation($item1, $item2, $i);
    }
}

if ($hundredsPlace != NULL) {
    echo $hundredsPlace;
}

if ($tensPlace != NULL) {
    echo $tensPlace;
}

echo $onesPlace;

// 桁数を揃える
function alignLength($largerValue, $smallValue) {
    // 不足桁数
    $n = count($largerValue) - count($smallValue);
    // 不足している分だけ 0 で埋める
    for ($i = 0; $i < count($largerValue); $i++) {
        if ($i >= (count($largerValue) - $n)) {
            $smallValue[$i] = 0;
        }
    }
    return $smallValue;
}

// 計算
function calculation($item1, $item2, $i) {
    // 合計が 10 以上の場合、十の位を無視
    if (count(str_split($item1[$i] + $item2[$i])) > 1) {
        return str_split($item1[$i] + $item2[$i])[1];
    }
    return str_split($item1[$i] + $item2[$i])[0];
}
?>