<?php
    $Page = "Thanks";
    $JS = "thanks";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/thanks.php");
    include_once($root."/pages/templates/top.php");
?>
<section class="banner">
    <div class="txtWrap">
        <h1><?=$txt1?></h1>
    </div>
    <div class="imgWrap">
        <img src="<?=$img1?>">
    </div>
</section>
<section>
    <p><?=$txt2?>
    <?=$txt3?></p>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>
