<?php
include_once($root.'/src/php/functions/footerLoader.php');

if(isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
}
else{
    $lang = $UK;
}
if(isset($_SESSION['footer'])){
    $footer = $_SESSION['footer'];
    if($footer['lang'] == $lang){
        $txtF1 = $footer['links']['title'];
        $txtF2 = $footer['links']['content'];
        $txtF3 = $footer['questions']['title'];
        $txtF4 = $footer['questions']['content'];
    }
    else{
        $footer = getFooter($host, $lang, $NL, $UK, $api, $root);
        $txtF1 = $footer['links']['title'];
        $txtF2 = $footer['links']['content'];
        $txtF3 = $footer['questions']['title'];
        $txtF4 = $footer['questions']['content'];
    }
}else{
    $footer = getFooter($host, $lang, $NL, $UK, $api, $root);
    $txtF1 = $footer['links']['title'];
    $txtF2 = $footer['links']['content'];
    $txtF3 = $footer['questions']['title'];
    $txtF4 = $footer['questions']['content'];
}