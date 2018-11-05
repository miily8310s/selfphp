<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    $i = 1;
    while ($i < 6) {
        print "{$i}番目のループです。<br />";
        $i++;
    }
    $k = 1;
    do {
        print "{$k}番目のループです。<br />";
        $k++; 
    }while($k < 6);
    
    for($k = 1;$k < 6;$k++){
        print "{$k}番目のループです。<br />";
    }


    $data = ['高江','掛谷','日尾','薄井','和田'];
    foreach ($data as $value ) {
        print "名前は{$value}<br />";
    }
    
    //下の例はエラーあり
    // $data1 = ['高江'　=> '男',　'掛谷'　=> '女',
    //           '日尾'　=> '男',　'薄井'　=> '女','和田'　=> '男'];
    // foreach ($data1 as $key => $value) {
    //     print "{$key}：{$value}<br />";
    // }
    ?> 
</body>
</html>