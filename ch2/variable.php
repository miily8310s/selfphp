<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    $msg = 'こんにちは、世界！';
    print $msg;

    //可変変数
    $x = 'title';
    $title = 'PHP:Hypertext Preprocessor';
    print $$x;

    //定数
    const TAX = 1.08;
    $price = 1000;
    $sum = $price * TAX;
    print $sum;

    //文字列の中にクォートを入れる場合
    $str = "He's teacher.";
    print $str;
    //エスケープ処理する場合
    $str1 = 'He\'s "GREAT" teacher.<br />';
    print $str1;

    //シングルクォートとダブルクォートの違い
    $title = 'サーバサイド技術の学び舎 - WINGS';
    $data1 = "サポートサイト\t「{$title}」へ<br />";
    $data2 = 'サポートサイト\t「{$title}」へ<br />';
    print $data1;
    print $data2;

    //ヒアドキュメント（ここエラーの原因不明）
    /*
    $str3 = 'PHP（PHP:Hypertext Preprocessor）';
    $msg = <<<EOD
    {$str3}は、サーバサイドで動作する簡易なスクリプト言語です。
    まずは、本書でじっくり基礎固めしましょう。<br />
    "Let's start, everyone!!"
    EOD;
    print $msg;
    */
    ?> 
</body>
</html>