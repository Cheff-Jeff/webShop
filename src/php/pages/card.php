<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}

if(isset($_COOKIE['cardItems']))
{
    $dataLink = "products?include=";
    $cookies = json_decode($_COOKIE['cardItems'], true);
    foreach($cookies as $cookie)
    {
        $dataLink = $dataLink.$cookie['id'].",";
    }
    
    $link = $api.$dataLink;
    $comics = getData($link);
}

function calcTotal($prize, $amount, $total)
{
    $newPrize = $total + ($prize * $amount);
    return $newPrize;
}