<?php

const DB_HOST = 'mysql:dbname=udemy_php;host=127.0.0.1;cherset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'password123';



//　例外処理　Exception
try{
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
    pdo::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //連想配列
    pdo::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //例外
    pdo::ATTR_EMULATE_PREPARES => false
    ]);
    echo '接続成功';
} catch(PDOException $e){
    echo '接続失敗' . $e->getMessage() . "\n";
    exit();
}

?>