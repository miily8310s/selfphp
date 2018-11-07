<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //mb_strlen関数は文字列の長さを返す
    $str = 'WINGSプロジェクト';
    print mb_strlen($str);

    //strtolower関数は文字列を大文字から小文字に変換
    //strtoupper関数は文字列を小文字から大文字に変換
    print strtolower('WINGSプロジェクト'); //アルファベットのみ変換の対象
    print '<br />';
    print strtoupper('wingsプロジェクト');
    print '<br />';
    print lcfirst('WINGS PROJECT');
    print '<br />';
    print ucfirst('wings project');
    print '<br />';
    print ucwords('wings project');
    print '<br />';
    print mb_strtolower('ＷＩＮＧＳプロジェクト'); //全角文字にはmb_strtolower関数を
    print '<br />';

    //文字列の一部分を取得
    $str1 = 'WINGSプロジェクト';
    print mb_substr($str1,5,2);
    print '<br />';
    print mb_substr($str,5,-4);

    //置き換えと書き換えた箇所の数を取得
    $str2 = 'にわにはにわにわとりがいる';
    print str_replace('にわ','ニワ',$str2,$cnt). '<br />';
    print "{$cnt}個の置き換えをしました。";

    //explode関数は文字列を特定の区切り文字で分割する
    $data = 'リオとニンザブロウとナミとリンリン';
    print_r(explode('と',$data));
    print '<br />';

    //特定の文字位置を検索する（初めて登場した文字位置を返す）
    $str3 = 'にわにはにわにわとりがいる';
    print mb_strpos($str3,'にわ',2) . '<br />';

    //prinf関数は文字列を整形する
    printf('%sは%sです。','ニンザブロウ','ハムスター');
    printf('%2$sは%1$sです。%2$s、大好き！','ニンザブロウ','ハムスター');
    ?> 
</body>
</html>