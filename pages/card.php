<?php
    $Page = "Card";
    $JS = "card";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/card.php");
    include_once($root."/pages/templates/top.php");
?>

<?php 
    include_once($root."/pages/templates/bottom.php");
?>