<?php
session_start();
//セッション変数を廃棄
$_SESSION = [];
if (isset($_COOKIE[session_name()])) {
//セッションクッキーを破棄
  $cparam = session_get_cookie_params();
  setcookie(session_name(), '', time() - 3600,
    $cparam['path'], $cparam['domain'],
    $cparam['secure'], $cparam['httponly']);
}
session_destroy();