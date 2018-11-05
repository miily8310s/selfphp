<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    print '108' + '15';
    print '108' + '1.5XYZ';
    print '108' + 'XYZ10';
    print '108' + '1.5XYZ10';
    print '108' + '1.5E1';
    print '108' + '0b11';
    print '108' + '010';
    print '108' + '0x1A';
    echo nl2br("\n");

    //加算子と減算子
    $x = 10;
    $y = ++$x;
    print $x;
    print $y;
    //これは改行を表す
    echo nl2br("\n");

    $i = 10;
    $j = $i++;
    print $i;
    print $j;
    echo nl2br("\n");

    //マジカルインクリメント
    $i = 'Z';
    print ++$i; //アルファベットならば次の文字へ
    print ++$i;
    echo nl2br("\n");

    $j = 'T8';
    print ++$j; //数字であれば1を加算する
    print ++$j;
    echo nl2br("\n");

    //浮動小数点数の演算
    print floor((0.1 + 0.7) * 10); //2進数で演算されるため結果が7になってしまう
    echo nl2br("\n");

    $add = bcadd(0.1,0.7,1);
    $mul = bcmul($add,10,1);
    print floor($mul);
    ?> 
</body>
</html>