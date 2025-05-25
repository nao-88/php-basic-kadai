<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 2通りのソートを行い、結果を直接表示する関数
        function sort_2way($array, $isAscending) {
            if ($isAscending) {
                sort($array); // 昇順ソート
                echo "昇順にソートします。<br>";
            } else {
                rsort($array); // 降順ソート
                echo "降順にソートします。<br>";
            }

            // foreachでソート結果を直接出力
            foreach ($array as $num) {
                echo "{$num}<br>";
            }
        }

        // ソート対象の配列
        $numbers = [4, 10, 15, 18, 23];

        // 昇順ソートを実行
        sort_2way($numbers, true);

        echo "<br>"; // 改行

        // 降順ソートを実行
        sort_2way($numbers, false);
        ?>
    </p>
</body>

</html>