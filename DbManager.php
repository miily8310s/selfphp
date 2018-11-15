<?php
    function getDb(){
        $dsn = 'mysql:dbname=selfphp; host=localhost; charset=utf8';
        $usr = 'selfuser';
        $passwd = 'selfpass';

        $db = new PDO($dsn, $usr, $passwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
?>