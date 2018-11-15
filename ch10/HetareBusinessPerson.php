<?php
require_once 'BusinessPerson.php';

//Personクラスを継承
class HetareBusinessPerson extends BusinessPerson {
    //workメソッドをオーバーライド
    public function work() {
        //親クラスのメソッドを実行
        parent::work();
        print 'ただし、ボチボチと・・・';
    }
}
?>