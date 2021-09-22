<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}

$link = $api."comics";
$data = getData($link);

for($i = 0; $i < count($data); $i++){
    switch ($data[$i]['slug']){
        // case 'page-title':
        //     $PageTitle = strip_tags($data[$i]['content']['rendered']);
        //     break;
        // case 'page-description':
        //     $pageDescription = strip_tags($data[$i]['content']['rendered']);
        //     break;
        // case 'whats-new-this-week':
        //     $txt1 = $data[$i]['title']['rendered'];
        //     $img1 = $data[$i]['imageURL']['large'];
        //     break;
        // case 'popular-comis-this-month':
        //     $txt2 = $data[$i]['title']['rendered'];
        //     $img2 = $data[$i]['imageURL']['large'];
        //     break;
        default:
            break;
    }
}

$link = $api."products?per_page=100";
$Comics = getData($link);