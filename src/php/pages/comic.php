<?php
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}

$link = $comicApi."avengers-hulk-1";
$data = getData($link);
echo '<pre>';
var_dump($data);
echo '</pre>';