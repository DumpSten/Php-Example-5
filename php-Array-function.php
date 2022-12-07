<?php
/*
    print_r()
    var_dump()
    explode()
    implode()
    count()
    is_array()
    shuffle()
    array_combine()
    array_count_values()
    array_flip()
    array_key_exists()
*/

$arr = [
    'name'  => 'Alper',
    'surname'   => 'Çatal',
    'age'   => '20'
];

//print_r($arr);
//var_dump($arr);

$test = 'alper,Çatal,software';
$arr = explode(',' , $test);
//print_r($arr);

$string = implode('|', $arr);
//echo $string;
//echo count($arr);

/*
    if (is_array($arr)) {
        echo 'this is an array';
    } else {
        echo 'this is not an array';
    }
*/

$arr = [1,2,3,4,5,6,7,8,9,10];
shuffle($arr);
//print_r($arr);

$key = ['name','surname'];
$value = ['alper', 'çatal'];
$arr = array_combine($key , $value);
//print_r($arr);

$arr = ['alper','çatal','alper','çatal','alp','çat'];
$arr2 = array_count_values($arr);
//print_r($arr2);

$arr = [
    'name'  => 'Alper',
    'surname'   => 'Çatal',
    'age'   => '20'
];
$arr2 = array_flip($arr);
//print_r($arr2);

$arr = [
    'name'  => 'Alper',
    'a' => [
        'b' => [
            'c' => [
                'd' => 'e',
                'e' => 'f'
            ]
        ]
    ]
];

function _array_key_exists($cur_key, $arr){
    foreach ($arr as $key => $val){
        if ($key == $cur_key){
            return true;
        }
        if (is_array($val)){
            return _array_key_exists($cur_key, $val);
        }
    }
    return false;
}

if (array_key_exists('name',$arr)) {
    echo 'has a name key';
}else {
    echo 'no name key';
}
?>