<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    $rank = '甲';
    switch ($rank) {
        case '甲':
            print '大変良いです。';
            break;
        case '乙':
            print '良いです。';
            break;
        case '丙':
            print 'もう少しがんばりましょう。';
            break;
        default:
            print '???';
            break;
    }

    $drink = 'ビール';
    switch ($drink) {
        case '日本酒':
        case 'ビール':
        case 'ワイン':
            print '醸造酒です。';
            break;
        case 'ブランデー':
        case 'ウイスキー':
            print '蒸留酒です。';
            break;
    }
    ?> 
</body>
</html>