<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //論理演算子
    $x = 1;
    if($x !== 2){print '実行されました。<br />';}
    $x === 2 or print '実行されました。'; //実行すべきではない

    //文字列演算子
    //カンマ（.）を使うと文字列を連結する
    $t = 'こんにちは';
    $u = '世界！';
    print $t . $u;
    //これは改行を表す
    echo nl2br("\n");

    //16進数や指数表現は変数に代入された時点で10進数に変換される
    $i = 0xFF;
    $j = 1.5E2;
    print $i . $j;
    echo nl2br("\n");

    //実行演算子(``)
    //下の例はカレントディレクトリ配下のファイルのリストを表示
    $result = `dir`;
    print $result;
    echo nl2br("\n");

    //エラー制御演算子
    print 1 / 0;
    echo nl2br("\n");
    @print 1 / 0;
    ?> 
</body>
</html>