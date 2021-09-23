<?php
if(isset($_GET))
{
    if(isset($_COOKIE['cardItems']))
    {
        $cookie = (array) json_decode($_COOKIE['cardItems']);
        $item = array_merge($_GET, $cookie);
    }
    else
    {
        $item = $_GET;
    }
    var_dump($item);
    // else
    // {
    //     $cookieString = '';
    // }
    // for($i = 0; $i < 2; $i++)
    // {
    //     if($i == 0)
    //     {
    //         $cookieString = $cookieString.'id:'.$item['id'].',';
    //     }
    //     else
    //     {
    //         $cookieString = $cookieString.'amount:'.$item['amount'].',';
    //     }
    // }
    // $cookieString = $cookieString.'|';
    setcookie('cardItems', json_encode($item), time() + (86400 * 30), "/"); // 86400 = 1 day
    // var_dump($cookieString);
}