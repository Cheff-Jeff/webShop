<?php
if(isset($_GET))
{
    session_start();
    if(isset($_SESSION['cardAmount']))
    {
        $_SESSION['cardAmount'] += $_GET['amount'];
    }
    else
    {
        $_SESSION['cardAmount'] = $_GET['amount'];
    }

    if(isset($_COOKIE['cardItems']))
    {
        $cookie = json_decode($_COOKIE['cardItems'], true);
        $cookieExist = false;

        for($i = 0; $i < count($cookie); $i++)
        {
            if($cookie[$i]['id'] == $_GET['id'])
            {
                $cookie[$i]['amount'] = intval($cookie[$i]['amount']) + intval($_GET['amount']);
                $cookie[$i]['amount'] = strval($cookie[$i]['amount']);
                $cookieExist = true;
            }
        }

        if(!$cookieExist)
        {
            $newItem[] = $_GET;
            $item = array_merge($newItem, $cookie);
            setCoockie($item);
        }
        else
        {
            setCoockie($cookie);
        }
    }
    else
    {
        $item[] = $_GET;
        setCoockie($item);
    }
}

function setCoockie($item)
{
    setcookie('cardItems', json_encode($item), time() + (86400 * 30), "/"); // 86400 = 1 day
}