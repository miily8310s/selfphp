<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //ジェネレータはreturnではなくyieldで値を返す
    function myGen(){
        yield 'あいうえお';
        yield 'カキクケコ';
        yield 'さしすせそ';
    }
    foreach (myGen() as $value) {
        print $value . '<br />';
    }

    ?> 
</body>
</html>