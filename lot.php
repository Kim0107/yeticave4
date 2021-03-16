<?php
require_once('functions.php');
require 'data.php';

$currentLot=NULL;
if(isset($_GET['id'])){
    $lotID = intval($_GET['id']);
    foreach ($data_list as $lot){
        if(intval($lot['id'])==$lotID){
            $currentLot = $lot;
            break;
        }
    }
}

if(!$data_list[$lotID]){
    http_response_code(404);
    exit;
}

$page_content = compile_template('lot.php',
    [
        'categories' => $categories,
        'lot' => $currentLot,
        'lotID' => $lotID,
        'data_list' => $data_list,
        'times_left' => $times_left]);
$layout_content = compile_template('layout.php',
[   'page_title' => 'Главная страница',
    'is_auth' => $is_auth,
    'user_name'=> $user_name,
    'user_avatar'=>$user_avatar,
    'page_content'=>$page_content,
    'categories' =>$categories
    ]);
print($layout_content);
?>
