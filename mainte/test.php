<?php
//パスワードを記録したファイルの場所
// echo __FILE__;
// C:\xampp\htdocs\php_test\mainte\test.php

// echo "<br>";

//パスワード（暗号化）
// echo(password_hash('password123', PASSWORD_BCRYPT));
// $2y$10$dTQ0igusbs4dig6277ASPecJja12II1kSIEaookE/cFP0EkqNR6T6
// ↑本当は消しておく

// echo "<br>";
?>

<?php
// ファイル操作1

// $contactFile = '.contact.dat';

// //ファイル丸ごと読み込み
// $fileContents = file_get_contents($contactFile);
// echo $fileContents;

// //ファイルに書き込み（上書き）
// file_put_contents($contactFile, "テストです");

// $addText = 'テストです' . "\n";

// //ファイルに書き込み（追記）
// file_put_contents($contactFile, $addText, FILE_APPEND);

//csv読み込み　配列 file ,区切る　explode, foreach

// $allData = file($contactFile);

// foreach($allData as $lineData){
//     $lines = explode(',', $lineData);
//     echo $lines[0]. '<br>';
//     echo $lines[1]. '<br>';
//     echo $lines[2]. '<br>';
// }

?>

<?php
//ファイル操作2

$contactFile = '.contact.dat';

$contents = fopen($contactFile, 'a+');

$addText = '1行追記' ."\n";

fwrite($contents, $addText);
fclose($contents);
?>





