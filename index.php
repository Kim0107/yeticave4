<?php
require_once('functions.php');
 $page_content = include_template('index.php',
 ['categories' => $categories,
     'data_list' => $data_list]);
$layout_content = include_template('layout.php',
    [
        'Page_Title' => 'Главная',
        'is_auth'=> $is_auth,
        'user_name'=> $user_name,
        'page_content' => $page_content,
        'categories'=> $categories
]);
print($layout_content);
?>

