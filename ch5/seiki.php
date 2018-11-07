<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //preg_match関数は正規表現で文字列を検索する
    $str = '彼の電話番号は0399-88-9785、私のは0398-99-1234です。郵便番号はどちらも678-1109です。';
    if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$str,$data)){
        print "電話番号：{$data[0]} <br />";
        print "市外局番：{$data[1]} <br />";
        print "市内局番：{$data[2]} <br />";
        print "加入者番号：{$data[3]} <br />";
    }

    //preg_match_all関数は全てのマッチ文字列を取得する
    $str1 = '彼の電話番号は0399-88-9785、私のは0398-99-1234です。郵便番号はどちらも678-1109です。';
    if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$str1,$data,PREG_SET_ORDER)){
        //マッチした順に取得
        foreach ($data as $item) {
            print "電話番号：{$item[0]} <br />";
            print "市外局番：{$item[1]} <br />";
            print "市内局番：{$item[2]} <br />";
            print "加入者番号：{$item[3]} <br />";
        }
    }

    //preg_split関数は正規表現で文字列を分割する
    $today = '2016-05-14';
    $result = preg_split('|[/.\-]|',$today); // /か.か\か-のときに分割する
    print "{$result[0]}年{$result[1]}月{$result[2]}日" . '<br />';

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