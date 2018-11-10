<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    $now = new Datetime();
    print $now->format('Y年m月d日 H:i:s') . '<br />';

    $dt = new Datetime('2016/5/15 10:58:31');
    print $dt->format('Y年m月d日 H:i:s')  . '<br />';
    $dt->add(new DateInterval('P1YT10H'));
    print $dt->format('Y年m月d日 H:i:s')  . '<br />';

    ?> 
</body>
</html>