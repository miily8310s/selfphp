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

    //オブジェクトがprintなどの出力時に文字列に変換される際に呼び出される__toStringメソッド
    public function __toString() {
        return $this->lastName.$this->firstName;
    }

    //オブジェクトがvar_dump関数に使用された際に呼び出される__debugInfoメソッド
    //下の例では'名'=>〇〇の形式で返すようにしている
    public function __debugInfo() {
        return [
            '名' => $this->firstName,
            '姓' => $this->lastName
        ];
    }
}