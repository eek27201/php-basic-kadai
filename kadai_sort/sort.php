<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列のソートを行う関数 
        function sort_2way($array, $order) {
           if ($order) {
             sort($array); // 昇順ソート
              } else { rsort($array); // 降順ソート
                 }
                  // ソート結果を1行ずつ表示
                   foreach ($array as $value) { 
                    echo $value . "<br>";
                   }
                   }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        echo "昇順にソートします。<br>";
        sort_2way($nums, true);

        echo "<br>"; // 改行
                         
        // 降順ソート
        echo "降順にソートします。<br>";
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
