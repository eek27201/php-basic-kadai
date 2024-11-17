<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Foodクラスの定義
        class Food {
            public $name;
            public $price;

            // コンストラクタ
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティを表示するメソッド
            public function show_price() {
                echo "値段: " . $this->price . "円<br>";
            }
        }

        // Animalクラスの定義
        class Animal {
            public $name;
            public $height;
            public $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightプロパティを表示するメソッド
            public function show_height() {
                echo "高さ: " . $this->height . "cm<br>";
            }
        }

        // Foodクラスのインスタンスを作成
        $food = new Food("リンゴ", 150);
        // Animalクラスのインスタンスを作成
        $animal = new Animal("キリン", 500, 900);

        // インスタンスの出力
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br><br>";

        // メソッドの呼び出し
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>
