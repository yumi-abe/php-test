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

echo '<br>';


//インプット引数なし、アウトプット戻りあり

function getNumberOfComment(){
    return 5;
}
var_dump(getNumberOfComment());
echo getNumberOfComment();


echo '<br>';
//インプット引数2つ、アウトプット戻りあり

function sumPraice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPraice(3,5);
echo $total;

echo '<br>';
echo '<br>';


?>

・組み込み関数

<?php

echo '<br>';

//文字列の長さ
//マルチバイト…日本語SJIS, UTF-8 3~6バイト（1文字3バイト）


$text = 'あいうえお';

echo strlen($text);

echo '<br>';

echo mb_strlen($text);

echo '<br>';

//文字列の置換
$str = '文字列を置換します';
echo str_replace('置換','ちかん',$str);

echo '<br>';

//指定文字列で分割

$str_2 = '指定文字列で、分割します';

var_dump(explode('、', $str_2));

echo '<br>';

//文字列をくっつける…implode

//正規表現…文字かどうか、数字かどうか、郵便番号・メールアドレスなど

$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/',$str_3);

echo '<br>';

//指定文字列から文字列を取得する

echo substr('abcde', 2);

echo '<br>';

echo mb_substr('あいうえお', 2);

echo '<br>';

//配列に配列を追加する

// http://html2php.starrypages.net/php/array-funcs
//配列関数一覧

$array = ['りんご','みかん'];

array_push($array,'ぶどう','なし');

echo '<pre>';
var_dump($array);
echo '</pre>';

echo '<br>';

?>

・関数を自作する
<?php

echo '<br>';

// camelcase
$postalCode = '123-4567';

function checkPostalCode($str){
    $replaced = str_replace('-','',$str);
    $length = strlen($replaced);

    var_dump($length);

    if($length === 7){
        return true;
    }
    return false;
}

var_dump(checkPostalCode($postalCode));

//snakecase
// check_postal_code()





?>



