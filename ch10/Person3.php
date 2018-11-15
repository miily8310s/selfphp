<?php
class Person{
    public $firstName;
    public $lastName;

    //インスタンス生成時にfirstNameとlastNameの値を設定
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function show(){
        print "<p>僕の名前は{$this->lastName}-{$this->firstName}です。</p>";
    }
}