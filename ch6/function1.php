<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    function getTriangleArea($base,$height) : float{
        return $base * $height / 2;
    }
    $area = getTriangleArea(8,10);
    print "三角形の面積は{$area}です。";

    //globalを変数につけて関数ブロックの中からグローバル変数を割りあてることができる
    function checkScope() : int{
        global $x;
        return ++$x;
    }
    print checkScope();
    print $x  . '<br />';

    //通常、関数が終了するタイミングでローカル変数は破棄されてしまう。
    //静的変数(static型)を使うと、ローカル変数を維持する事ができる
    function checkStatic() : int{
        static $y = 0;
        return ++$y;
    }
    print checkStatic() . '<br />';
    print checkStatic() . '<br />';
    print $y. '<br />'; //nullになる

    //仮引数の変数に&をつけるとその関数の引数の変数に直接影響を与える事ができる
    function increment(int &$num) : int{
        $num++;
        return $num;
    }
    $value = 10;
    print increment($value) . '<br />';
    print $value . '<br />'; 

    //callableを使って他の関数の名前を指定してその関数を実行させる
    //callableはコールバック関数のこと
    function my_array_walk(array $array, callable $func){
        foreach ($array as $key => $value) {
            $func($value,$key);
        }
    }
    // function showItem($value,$key){
    //     print "{$key} : {$value}<br />";
    // }
    $data = ['杉山','長田','杉沼','和田','土井'];
    $data1 = [100,50,10,5];
    // my_array_walk($data,'showItem');
    $result = 0;
    //use命令を使って既存の変数$resultに直接影響を与えるよう設定
    my_array_walk($data1,function(float $value,int $key) use(&$result){
        $result += $value;
    });
    print "合計値：{$result}";

    ?> 
</body>
</html>