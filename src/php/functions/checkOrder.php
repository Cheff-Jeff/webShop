<?php
if(!isset($root) || is_null($root)){
    include_once("../../../config.php");
}
$methods = $_POST['methods'];
if($methods == 'Bancontact')
{
    header('Location: /pages/checkout.php?method='.$methods);
}
else if($methods == 'card')
{
    header('Location: /pages/checkout.php?method='.$methods);
}