<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}

$link = $api."checkout";
$data = getData($link);

for($i = 0; $i < count($data); $i++){
    switch ($data[$i]['slug']){
        // case 'page-title':
        //     $PageTitle = strip_tags($data[$i]['content']['rendered']);
        //     break;
        // case 'page-description':
        //     $pageDescription = strip_tags($data[$i]['content']['rendered']);
        //     break;
        case 'order-details':
            $txt1 = $data[$i]['title']['rendered'];
            $img1 = $data[$i]['imageURL']['large'];
            break;
        case 'background':
            $img2 = $data[$i]['imageURL']['large'];
            break;
        default:
            break;
    }
}