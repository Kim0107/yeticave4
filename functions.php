<?php
require_once('data.php');
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
