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

$link = mysqli_connect('127.0.0.1', 'root', '','schema');
mysqli_set_charset($link, utf8);

$sql = 'select * from categories';
$result = mysqli_query($link, $sql);

if($result){
    echo mysqli_error($link);
}
    $categories_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
