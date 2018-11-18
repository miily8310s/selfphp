<?php
class MyUtil {
  public static function getContents(string $url): string {
    //URLの記載形式がおかしい場合
    if (!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|', $url)) {
      throw new Exception('不正なURLの形式です。');
    }
    $data = @file_get_contents($url);
    //ページのデータが取得できなかった場合
    if (!$data) {
      throw new Exception('指定されたURLが見つかりません。');
    }
    return $data;
  }
}

try {
  print MyUtil::getContents('http://www.wings.msn.to/nothing/');
} catch (Exception $e) {
  print "エラーメッセージ：{$e->getMessage()}";
}
