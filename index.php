・変数
<?php
echo '<br>';

//　変数 動的型付　（Java,Visual　Basic…静的型付）
$test_1 = 123;
//先頭は英文字かアンダーバー
$test_2 = 'テストです';

$test_3 = $test_1 . $test_2;

//変数の型と値を出力する関数
var_dump($test_3);
echo $test_3;

echo '<br>';
?>


・定数

<?php
echo '<br>';

//変わらない文字・文字
//constant

const MAX = 'テスト';
// const MAX = 'テスト2';
//上書きしても変わらない
echo MAX;

echo '<br>';
?>

・配列

<?php
echo '<br>';

//配列１行
$array_1 = [1,2,3];
//0から始まる
echo $array_1[1];

echo '<pre>';
var_dump($array_1);
echo '</pre>';

$array_2 = [
    ['赤','青','黄'],
    ['緑','紫','黒']
];

echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];

echo '<br>';

?>

・連想配列
<?php
echo '<br>';


$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' =>'サッカー'
];
echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

echo '<br>';


$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
    ];

    echo $array_member_2['香川']['height'];

    echo '<pre>';
var_dump($array_member_2);
echo '</pre>';

$array_member_3 = [
    '1kumi' => [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
    ],
    '2kumi' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'サッカー'
        ],
        '乾' => [
            'height' => 168,
            'hobby' => 'サッカー'
        ]
    ]
];

echo $array_member_3['2kumi']['長友']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';

echo '<br>';

?>

・if文
<?php

echo '<br>';

// if (条件){
//     条件が真なら実行
// }

$height = 90;

var_dump($height);

if ($height === 90){  //条件は数字
    echo '身長は' . $height . 'cmです';
}

echo '<br>';

// == 一致
// === 型も一致

// if (条件){
//     条件が真なら実行
// } else {
//     条件が偽なら実行
// }

if ($height === 91){  //条件は数字
    echo '身長は' . $height . 'cmです';
} else {
    echo '身長は' . $height . 'cmではありません';
}

echo '<br>';

$signal = 'blue';

if ($signal === 'blue'){
    echo 'とまれ';
} else if($signal === 'yellow'){
    echo '一旦停止';
} else {
    echo '進む';
}

echo '<br>';

//データが入っているかどうか
//isset empty is_null

$test = '';

if (!empty($test)){
    echo '変数は空ではありません';
}

echo '<br>';

//AND(&&) とOR(||)
$signal_1 = 'red';
$signal_2 = 'blue';

if($signal_1 === 'red' || $signal_2 === 'blue'){
    echo '赤と青です';
}

echo '<br>';
//三項演算子
//if else 
//条件　？　真：偽
$math = 80;
$comment = $math > 80 ? 'good' : 'notgood';

echo $comment;
?>

<?php

echo '<br>';
// 複数の値 foreach

$members = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo '<br>';

//バリューのみ表示
foreach($members as $member){
    echo $member;
}


echo '<br>';

//キーとバリューそれぞれ表示
foreach($members as $key => $value){
    echo $key . 'は' . $value . 'です';
}


$members_2 = [
    '本田'=>[
    'height' => 170,
    'hobby' => 'サッカー'
    ],
    '香川'=>[
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];

echo '<br>';

//多段階の配列を展開
foreach($members_2 as $member_1){
    foreach($member_1 as $member => $value){
        echo $member . 'は' . $value . 'です';
    }
}

?>

<?php

echo '<br>';

//for 繰り返す数が決まっている
//while 繰り返す数が決まっていない

//continue, break
for ($i = 0; $i < 10; $i++ ){
    if($i === 5){
        //break;
        continue;
    }
    echo $i;
}

echo '<br>';

$j = 0;
while($j < 3){
    echo $j;
    $j++;
}

echo '<br>';

// do{echo $j;}
// while($j < 0);
?>

<?php

// switch ==なので型は見分けてくれない
// if文のほうがいい　みやすい

$data = 4;

switch($data){
    case 1;
    echo '1です';
    break;
    case 2;
    echo '2です';
    break;
    case 3;
    echo '3です';
    break;
    default:
    echo '1-3ではありません';
}

?>