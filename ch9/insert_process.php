<?php
require_once '../DbManager.php';

try {
    //データベースに接続
    $db = getDb();
    //INSERT文を準備
    $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
    //画面に入力された値をINSERT文の5つの値に設定
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    //INSERT文を実行
    $stt->execute();
    //実行後は入力フォームにリダイレクト
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
  } catch(PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
  }