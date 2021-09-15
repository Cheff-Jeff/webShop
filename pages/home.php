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
<section class="Home">
    <div class="HomeBackgroud">
        <img src="<?=$img1?>" alt="home background">
    </div>
    <div class="HomeTexts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="HomeTextInner">
                        <h1><?=$txt1?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>
