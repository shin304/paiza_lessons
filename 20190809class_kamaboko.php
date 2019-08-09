<?php

class Product 
{ 
    private $name; //　商品名を取得
    private $productDate; //　製造日を取得

    //　コンストラクタ
    public function __construct($name, $productDate)
    {
        // var_dump($name); die();
        $this->name = $name;
        $this->productDate = $productDate;
    }

    //　商品名を取得
    public function getName()
    {
        // var_dump($this->name); die();
        return $this->name;
    }
    //　製造日を取得
    public function getProductDate()
    {
        return $this->productDate;
    }

}
  

?>