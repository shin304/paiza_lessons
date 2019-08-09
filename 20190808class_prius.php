<?php
// 2台のプリウスを走らせてみる

class Prius {

    // 走行距離 ⇐ なぜprivate?
    private $mileage = 0;

    // 走行距離を設定（走った分、走行距離を加算）
    public function drive($distance) 
    {
        $this->mileage += $distance;
    }

    // 走行距離を取得
    public function getMileage()
    {
        return $this->mileage;
    }
    
}

    // インスタンスを作成
$prius1 = new Prius();
$prius2 = new Prius();

    // 走行距離を設定
$prius1->drive(80);
$prius2->drive(2500);

    // 走行距離を取得
$totalMileage1 = $prius1->getmileage();
$totalMileage2 = $prius2->getmileage();

    // echo
echo "プリウス1は" . $totalMileage1 . "km走りました" . "\n";
echo "プリウス2は" . $totalMileage2 . "km走りました" . "\n";