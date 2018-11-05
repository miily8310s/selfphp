<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    $x = 10;
    if($x === 10){
        print '変数$xは10です。';
    }else{
        print '変数$xは10ではありません。';
    }

    $y = 35;
    if($y > 20){
        print '変数$yは20より大きいです。';
    }elseif($y > 10){
        print '変数$yは10より大きく、20以下です。';   
    }else{
        print '変数$yは10以下です。';
    }

    $g = 1;
    $h = 0;
    if($g === 1){
        if($h === 1){
            print '変数$g、$hは1です。';
        }else{
            print '変数$gは1ですが、$hは1ではありません。';
        }
    }else{
        print '変数$gは1ではありません。';
    }
    ?> 
</body>
</html>