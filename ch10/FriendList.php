<?php
class FriendList implements IteratorAggregate{
    public $version = '1.0.0';
    public $name = '友人リスト';
    private $list = [];

    //反復処理の対象を定義
    public function getIterator(): Traversable {
        return new ArrayIterator($this->list);
    }

    public function add(Person $p){
        //Person型のインストールを配列に追加する
        $this->list[] = $p;
    }

    //オブジェクトが関数の形式で呼び出される際に実行される__invokeメソッド
    public function __invoke($index) {
        return $this->list[$index];
    }
}