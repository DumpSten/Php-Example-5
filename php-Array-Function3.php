<?php

/*
    array_values()
    array_push()
    array_unshift()
    array_keys()
    current()
    end()
    next()
    prev()
    reset()
    extract()
    asort()
    arsort()
    ksort()
    krsort()
*/

$arr = [
    'name' => 'Alper',
    'surname' => 'Çatal'
];

$arr2 = array_values($arr);
$arr = ['alper','çatal','alper','çatal','udemy'];
//print_r($arr);
$arr2 = array_unique($arr);
//print_r(array_values($arr2));

$arr = ['alper','çatal'];
array_push($arr, 'udemy', 'prototurk', '93academy');
$arr['key'] = 'new value';
//print_r($arr);

$arr = ['alper','çatal'];
array_unshift($arr, 'udemy');
//print_r($arr);
$arr2 = [
    'site' => 'udemy'
];
$arr = array_merge($arr2, $arr);
//print_r($arr);

$arr = [
    'name' => 'alper',
    'surname' => 'çatal',
    'a' => [
        'b' => 'c',
        'd' => [
            'e' => 'f'
        ]
    ]
];

$keys = array_keys($arr);

function _array_keys($arr)
{
    static $keys = [];
    foreach ($arr as $key => $val){
        array_push($keys, $key);
        if (is_array($val)){
            _array_keys($val);
        }
    }
    return $keys;
}

$keys = _array_keys($arr);
//print_r($keys);

$arr = ['alper','çatal', 'udemy', 'prototurk', '93academy'];
/*
echo current($arr) . '<br>';
echo next($arr) . '<br>';
echo next($arr) . '<br>';
echo prev($arr) . '<br>';
echo next($arr) . '<br>';
reset($arr);
echo next($arr) . '<br>';
//echo end($arr);
*/

$arr = [
    'name' => 'alper',
    'surname' => 'çatal'
];
extract($arr);
//echo $soyad;

$arr = [3,1,6,4];
//print_r($arr);
//asort($arr);
//arsort($arr);
//print_r($arr);

$arr = [
    'c' => 'value 3',
    'a' => 'value 1',
    'b' => 'value 2'
];
krsort($arr);
print_r($arr);

?>