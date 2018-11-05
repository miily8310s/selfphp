<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //文字列混在の比較
    var_dump('3.14' == 3.14000);
    var_dump('3.14E2' == 314);
    var_dump('0x10' == 16);
    var_dump('010' == 8);
    var_dump('0b11' == 3);
    var_dump('13xyz' == 13);
    var_dump('X' == 0);
    var_dump('3.14' == '3.14000');
    var_dump('3.14E2' == '314');
    var_dump('13xyz' == '13');
    echo nl2br("\n");

    //厳密な等価演算子
    var_dump('3.14E2' === 314);
    var_dump('X' === 0);
    var_dump('1' === 1);
    echo nl2br("\n");

    //浮動小数点数の比較
    const EPSILON = 0.00001;
    $x = 0.123456;
    $y = 0.123455;
    var_dump(abs($x - $y) < EPSILON);
    echo nl2br("\n");

    //配列の比較
    $data01 = [1,2,3];
    $data02 = [1,5];
    var_dump($data01 < $data02);

    $data11 = [1,2,3];
    $data12 = [1,5,1];
    var_dump($data11 < $data12);
    echo nl2br("\n");

    //条件演算子(?:)
    $score = 75;
    print $score > 70 ? '合格' : '不合格...';

    $message = '';
    print $message ?: '空です。。';

    //$message1 = 'こんにちは';
    print $message1 ?? 'ノーコメント';

    ?> 
</body>
</html>