<?php
require_once 'Person3.php';

$p1 = new Person('リオ','山田');
//$p2 = $p1;
$p2 = clone $p1;
//$p2->firstName = '奈美';
//$p2->lastName = '掛谷';

//$p2 = $p1の場合はPerson Object ( [firstName] => 奈美 [lastName] => 掛谷 )
//cloneを使った場合はPerson Object ( [firstName] => リオ [lastName] => 山田 )
print_r($p1);
print_r($p2);

print('<br />');

//同じ値であるときは==を使う
var_dump($p1 == $p2);
//同じインスタンスであるかは===を使う
var_dump($p1 === $p2);

$p3 = $p1;
var_dump($p1 == $p3);
var_dump($p1 === $p3);
?>