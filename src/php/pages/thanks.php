<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}

$link = $api."thanks";
$data = getData($link);

for($i = 0; $i < count($data); $i++){
    switch ($data[$i]['slug']){
        // case 'page-title':
        //     $PageTitle = strip_tags($data[$i]['content']['rendered']);
        //     break;
        // case 'page-description':
        //     $pageDescription = strip_tags($data[$i]['content']['rendered']);
        //     break;
        case 'thanks':
            $txt1 = $data[$i]['title']['rendered'];
            $img1 = $data[$i]['imageURL']['large'];
            break;
        case 'order-completed':
            $txt2 = $data[$i]['title']['rendered'];
            $txt3 = $data[$i]['content']['rendered'];
            break;
        default:
            break;
    }
}