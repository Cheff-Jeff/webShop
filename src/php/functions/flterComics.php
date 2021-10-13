<?php
$catagories = file_get_contents('php://input');
$catagories = json_decode($catagories);
var_dump($catagories);
if(!isset($root) || is_null($root)){
    include_once("../../../config.php");
}
if(!function_exists('getData')){
    include_once($root."/src/php/functions/dataLoader.php");
}