<?php
require_once 'Person3.php';

$p = new Person('太郎','山田');
//PHPではオブジェクトのインスタンスはprintでは出力できない
//printで使うためにはオブジェクトは文字列表現に変換して使う必要がある
print $p.'<br />';
var_dump($p);
?>