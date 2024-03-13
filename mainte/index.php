<?php
require 'db_connection.php';

// //ユーザー入力なし query
// $sql = 'select * from contacts where id = 4'; //sql文
// $stmt = $pdo->query($sql); //sql実行

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

//ユーザー入力あり prepare bind execute SQLインジェクション対策
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダ
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindvalue('id', 3, PDO::PARAM_INT); //紐づけ
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

//トランザクション　まとまって処理 biginTransaction, commit, rollback

$pdo->beginTransaction();





try{
    //sql処理
    $stmt = $pdo->prepare($sql); //プリペアードステートメント
    $stmt->bindvalue('id', 3, PDO::PARAM_INT); //紐づけ
    $stmt->execute(); //実行

    $pdo->commit();

}catch(PDOException $e){
    $pdo->rollback(); //更新のキャンセル

}



?>