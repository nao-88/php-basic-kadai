<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 2通りのソートを行う関数
        function sort_2way($array, $order) {
            if ($order == 'asc') {
                sort($array); // 昇順ソート
            } else if ($order == 'desc') {
                rsort($array); // 降順ソート
            }
            return $array;
        }

        // ソート対象の配列
        $numbers = [4, 10, 15, 18, 23];

        // 昇順ソートの結果を表示
        echo "昇順にソートします。<br>";
        $sorted_asc = sort_2way($numbers, 'asc');
        foreach ($sorted_asc as $num) {
            echo "{$num}<br>";
        }

        // 降順ソートの結果を表示
        echo "降順にソートします。<br>";
        $sorted_desc = sort_2way($numbers, 'desc');
        foreach ($sorted_desc as $num) {
            echo "{$num}<br>";
        }
        ?>
    </p>
</body>

</html>