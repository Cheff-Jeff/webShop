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

$link = $api."card";
$data = getData($link);

for($i = 0; $i < count($data); $i++){
    switch ($data[$i]['slug']){
        // case 'page-title':
        //     $PageTitle = strip_tags($data[$i]['content']['rendered']);
        //     break;
        // case 'page-description':
        //     $pageDescription = strip_tags($data[$i]['content']['rendered']);
        //     break;
        case 'shopping-card':
            $txt1 = $data[$i]['title']['rendered'];
            $img1 = $data[$i]['imageURL']['large'];
            break;
        default:
            break;
    }
}