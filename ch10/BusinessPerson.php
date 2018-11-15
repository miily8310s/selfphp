<?php
require_once 'Person3.php';

//Personクラスを継承
class BusinessPerson extends Person {
    public function work() {
        print "<p>{$this->lastName}-{$this->firstName}は働いています。</p>";
    }
}
?>