<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //配列の結合
    $assoc1 = [
        'Apple' => 'Red',
        'Orange' => 'Yellow',
        'Melon' => 'Green'
    ];
    $assoc2 = [
        'Grape' => 'Purple',
        'Apple' => 'Green',
        'Strawberry' => 'Red'
    ];
    $result = $assoc1 + $assoc2;
    print_r($result); //左の配列に存在しないキーの要素を右の配列から取り出し、左の配列に追加する

    //これは改行を表す
    echo nl2br("\n");

    //値による代入
    $x = 1;
    $y = $x;
    $x = 5;
    print $y; //$yは$xの値に影響を受けない
    echo nl2br("\n");

    //参照による代入
    $x1 = 1;
    $y1 = &$x1; //$x1のアドレスをコピーし、$xの値に影響を受ける
    $x1 = 5;
    print $y1;
    echo nl2br("\n");
    ?> 
</body>
</html>