<?php
//パスワードを記録したファイルの場所
echo __FILE__;
// C:\xampp\htdocs\php_test\mainte\test.php

echo "<br>";

//パスワード（暗号化）
echo(password_hash('password123', PASSWORD_BCRYPT));
// $2y$10$dTQ0igusbs4dig6277ASPecJja12II1kSIEaookE/cFP0EkqNR6T6
// ↑本当は消しておく
?>
