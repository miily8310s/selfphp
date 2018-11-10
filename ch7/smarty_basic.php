<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    require_once '../vendor/autoload.php';
    $s = new Smarty();
    $s->template_dir = './templates/';
    $s->compile_dir = './templates_c/';
    $s->assign('message','こんにちは、世界！');
    $s->display('smarty_basic.tpl');

    ?> 
</body>
</html>