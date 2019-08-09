<?php
// 2つのフィールドを定義
// private = 修飾子
class Product {
    private $name; // 商品名
    private $price; // 価格

    // 商品名を設定する
    public function setName($name) {
        $this->name = $name;
    }

    // 商品名を取得する
    public function getName() {
        return $this->name;
    }

    // インスタンスを生成
$product = new Product();

    //　名前を設定
$product->setName("supreme");

    // 名前を取得
$productName = $product->getName();
    //　echo
echo $productName;
    
}