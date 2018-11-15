<?php
class Area{
    //staticつまり静的メソッドはクラスから直接呼び出すメソッド
    public static $pi = 3.14;

    //radiusは半径のこと
    public static function circle(float $radius): float{
        return pow($radius, 2) * self::$pi;
    }
}
?>