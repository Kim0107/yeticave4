<?php
require_once('functions.php');
require_once('data.php');
session_start();
 $page_content = include_template('index.php',
 [ 'categories_list'=> $categories_list,
     'data_list' => $data_list]);
$layout_content = include_template('layout.php',
    [
        'Page_Title' => 'Главная',
        'is_auth'=> $is_auth,
        'user_name'=> $user_name,
        'page_content' => $page_content,
        'categories_list'=> $categories_list,
        'user_avatar' => $user_avatar
]);
print($layout_content);
?>

