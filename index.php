<?php
session_start();
include_once('config.php');
$request = $_SERVER['REQUEST_URI'];

if(strpos($request, '/') !== false){
    $request = str_replace('//','/', $request);
}

$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0; rv:11.0') !== false)) {
    require __DIR__ . '/pages/errors/ie.html';
    die();
}

// if(empty($_SESSION['menu'])){
//     include_once($root."/src/php/functions/getMenu.php");
//     GetMenu($host, $api, $root);          
// }
include_once($root."/src/php/functions/getMenu.php");
GetMenu($host, $api, $root);    

$menuItems = $_SESSION['menu'];

if(strpos($request, '?fbclid')){
    $request = substr($request, 0, strpos($request, "?fbclid"));
}

if(strpos($request, '?payment_intent')){
    $request = substr($request, 0, strpos($request, "?payment_intent"));
}

if(strpos($request, 'comic/')){
    require __DIR__ . '/pages/comic.php';
    die();
}

foreach($menuItems as $menuItem){
    if($request == $menuItem['Link']){
        if(!function_exists('getData')){
            include_once($root."/src/php/functions/dataLoader.php");
        }
        $template = getData($menuItem['templateIpa']);
        $template = $template[0]['acf']['template'];
        require __DIR__ . '/pages/'.$template;
        die();
    }
}

switch ($request) {
    case '/' :
        require __DIR__ . '/pages/home.php';
        die();
        break;
    case '/home' :
        require __DIR__ . '/pages/home.php';
        die();
        break;
    case '' :
        require __DIR__ . '/pages/home.php';
        die();
        break;
    case '/card' :
        require __DIR__ . '/pages/card.php';
        die();
    case '/order' :
        require __DIR__ . '/pages/order.php';
        die();
    case '/checkout' :
        require __DIR__ . '/pages/checkout.php';
        die();
    case '/thanks' :
        require __DIR__ . '/pages/thanks.php';
        die();
    case '/wordpress' :
        require __DIR__ . '/pages/home.php';
        die();
        break;
        break;
    case '/wp' :
        require __DIR__ . '/wordpress/wp-login.php';
        die();
        break;
    case '/wp-admin' :
        require __DIR__ . '/wordpress/wp-login.php';
        die();
        break;
    default:
        // http_response_code(404);
        // require __DIR__ . '/pages/errors/404.php';
        // die();
        break;
}