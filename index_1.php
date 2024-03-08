・関数

<?php
echo '<br>';
// function test(引数){
    //処理

    // return //戻り値;
// }

//インプット引数なし、アウトプット戻り値なし
function test(){
    echo 'テスト';
}

test();

echo '<br>';

//インプット引数あり、アウトプット戻り値なし

$comment = 'コメント';
function getComment($string){
    echo $string;
}

getComment($comment);

?>

