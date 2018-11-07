<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    $data[] = date('Y/m/d H:i:s');
    $data[] = $_SERVER['SCRIPT_NAME'];
    $data[] = $_SERVER['HTTP_USER_AGENT'];
    $data[] = $_SERVER['HTTP_REFERER'];

    //ファイルを開く、ファイルをロック、ファイルに書き込み、ファイルをロック解除・閉じるの順
    $file = @fopen('access.log','ab') or die('ファイルを開けませんでした！');
    flock($file,LOCK_EX);
    fwrite($file,implode("\t",$data) . "\n");
    flock($file,LOCK_UN);
    fclose($file);
    print 'アクセルログを記録しました。';
    ?> 
</body>
</html>