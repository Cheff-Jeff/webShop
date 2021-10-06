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

$bannerImg = $host.'wordpress/wp-content/uploads/2021/09/secBanner.png';

$img1 = $comic[0]['imageURL']['large'];
$txt1 = $comic[0]['title']['rendered'];
$txt2 = $comic[0]['content']['rendered'];
$id = $comic[0]['id'];
$writer = $comic[0]['acf']['writer'];
$price = str_replace('.',',',$comic[0]['acf']['price']);
$bundel = $comic[0]['acf']['bundel'];
$Publisher = '';
$title = 'Comic';

foreach($comic[0]['categoryName'] as $cat)
{
    if($cat['category_parent'] == 13)
    {
        $title = $cat['cat_name'];
    }
    else if($cat['category_parent'] == 14)
    {
        $Publisher = $cat['cat_name'];
    }
}