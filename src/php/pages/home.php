<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}

// $link = $api."home";
// $data = getData($link);
// if(isset($_SESSION['lang'])){
//     $lang = $_SESSION['lang'];
// }else{
//     $lang = $UK;
// }

// for($i = 0; $i < count($data); $i++){
//     switch ($data[$i]['slug']){
//         case 'page-title':
//             $PageTitle = strip_tags($data[$i]['content']['rendered']);
//             break;
//         case 'page-description':
//             $pageDescription = strip_tags($data[$i]['content']['rendered']);
//             break;
//         case 'full-stack-web-developer-wordpress-expert':
//             switch ($lang){
//                 case $NL:
//                     $txt1 = $data[$i]['acf']['tille'];
//                     break;
//                 default: 
//                     $txt1 = $data[$i]['title']['rendered'];
//                 break;
//             }
//             $img1 = $data[$i]['imageURL']['large'];
//             break;
//         default:
//             break;
//     }
// }