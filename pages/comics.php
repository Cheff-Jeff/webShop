<?php
    $Page = "Home";
    $JS = "home";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/home.php");
    include_once($root."/pages/templates/top.php");
?>
<section class="pt-5">
    <div class="pt-5">
        <a href="/comic/avengers-hulk-1">Test</a>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>