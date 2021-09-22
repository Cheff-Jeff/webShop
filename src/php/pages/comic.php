<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}
if(!function_exists('getSlug')){
    include_once($root."/src/php/functions/getSlug.php");
}
$slug = getSlug($request);
$link = $comicApi.$slug;
$comic = getData($link);

$img1 = $comic[0]['imageURL']['large'];
$txt1 = $comic[0]['title']['rendered'];