<?php
// Foodクラスの定義
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// Animalクラスの定義
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// Foodクラスのインスタンスを作成
$food = new Food("potato", 250);

// Animalクラスのインスタンスを作成
$animal = new Animal("dog", 60, 5000);

// print_r関数でインスタンスを出力
print_r($food);
echo "<br>";
print_r($animal);
echo "<br>";

// 各メソッドを実行
$food->show_price();
$animal->show_height();
?>