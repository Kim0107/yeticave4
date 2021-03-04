<?php
$is_auth = rand(0, 1);
$user_avatar = 'img/user.jpg';
$user_name = 'kim0107'; // укажите здесь ваше имя
$categories = [
    "Boards"=>"Доски и лыжи",
    "Mounts"=>"Крепления",
    "Boots"=>"Ботинки",
    "clothes"=>"Одежда",
    "tools"=>"Инструменты",
    "other"=>"Разное"
];
$data_list = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10999,
        'gif' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'gif' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'gif' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'gif' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
        'gif' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'gif' => 'img/lot-6.jpg'
    ]
];

function format_sum($number)
{
    $withrub = true;
    $number=ceil($number);
    if ($number >= 1000) {
        $result = number_format($number, 0, ".", " ");
    }
    else {
        $result = $number;
    }

    if ($withrub == true){
        return $result . '<b class=\"rub\">₽</b>';
    }
    else{
        return $result;
    }

}
function time_left(){
    $tomorrow = strtotime('tomorrow');
    $time_now = strtotime('now');
    $times_left = $tomorrow - $time_now;
    $hours = floor($times_left/3600);
    $minutes = floor(($times_left%3600)/60);
    $times_left = sprintf("%02d:%02d",$hours,$minutes);
    return $times_left;
}

function include_template($name, $data){
    $name = 'templates/' .$name;
    $result = '';
    if(!file_exists($name)){
        return $result;
    }
    ob_start();
    extract($data);
    require $name;
    $result = ob_get_clean();
    return $result;
}
?>
