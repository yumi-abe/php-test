<?php

session_start();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
    echo 'セッション破棄しました';

    $_SESSION = [];

    if(isset($_COOKIE['PHPSESSID'])){
        setcookie('PHPSESSID', '', time() - 1800, '/');
    }
    
    session_destroy();

    echo 'セッション';
    echo '<pre>';
    echo var_dump($_SESSION);
    echo '</pre>';

    echo 'クッキー';
    echo '<pre>';
    echo var_dump($_COOKIE);
    echo '</pre>';

    ?>
</body>
</html>