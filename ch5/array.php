<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //count関数は配列の要素数を返す
    $data = ['山田','掛谷','日尾','本多','矢吹'];
    print count($data) . '<br />';

    //array_merge関数は配列要素を連結する
    $arr1 = [1,3,5];
    $arr2 = [2,3,6];
    $result = array_merge($arr1,$arr2);
    print_r($result);
    print '<br />';

    //配列に直接影響を及ぼす関数
    $arr = ['高江','青木','片淵'];
    print array_push($arr,'山田','土井') . '<br />'; //要素を末に追加
    print_r($arr);
    print array_pop($arr) . '<br />'; //末の要素を除去
    print_r($arr);
    print array_shift($arr) . '<br />'; //1番めの要素を除去
    print_r($arr);
    print array_unshift($arr,'掛谷','横塚','上垣') . '<br />'; //1番目から順に指定した値を配列に追加する
    print_r($arr);

    //array_splice関数は配列に複数要素を追加・置き換え・削除する
    $arr1 = ['高江','青木','片淵','和田','花だ','砂糖'];
    print_r(array_splice($arr1,2,3,['日尾','掛谷','薄い']));
    print '<br />';
    print_r($arr1);
    print '<br />';
    //array_slice関数は配列から特定範囲の要素を取得する
    $arr2 = ['高江','青木','片淵','和田','花だ','砂糖'];
    print_r(array_slice($arr2,2,3));
    print '<br />';
    print_r($arr2); //array_slice関数は配列そのものに影響を与えない
    print '<br />';

    //array_search関数は配列から特定の値を検索する
    //見つかったときはtrueを、逆ならfalseを返す
    $lang = ['PHP','JavaScript','Java','C#'];
    var_dump(array_search('JavaScript',$lang));
    print '<br />';

    //sort関数は配列の内容を入れ替える
    $sport = ['Tennis','Swimming','Soccer','Baseball'];
    sort($sport,SORT_STRING); //アルファベット順に並べる
    print_r($sport);
    ?> 
</body>
</html>