<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    //通常配列
    $data = ['山田','掛谷','本田','矢吹'];
    print $data[3];
    $data[] = '丸井';
    print $data[4];

    //連想配列
    $members = [
        '山田太郎' => '千葉県松戸市',
        '掛谷翔太' => '広島県広島市',
        '本田のぞみ' => '埼玉県三郷市',
        '矢吹久美子' => '愛知県三河市'
    ];
    print $members['山田太郎'];

    //明示的な変換
    var_dump((int)1530.95);
    var_dump((int)-1530.95);
    var_dump((int)true);
    var_dump((string)true);
    var_dump((int)false);
    var_dump((string)false);
    var_dump((array)108);
    var_dump((unset)1530.95);
    var_dump(bindec('0b11'));
    var_dump(octdec('0777'));
    var_dump(hexdec('0xFF'));
    var_dump((float)'1E4');
    ?> 
</body>
</html>