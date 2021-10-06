<?php
    $Page = "Comic";
    $JS = "comic";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/comic.php");
    include_once($root."/pages/templates/top.php");
?>
<section class="banner">
    <div class="txtWrap">
        <h1><?=$title?></h1>
    </div>
    <div class="imgWrap">
        <img src="<?=$bannerImg?>">
    </div>
</section>
<section class="content">
    <div class="background" style="background-image: url(<?=$img1?>);">
    </div>
    <div id="<?=$id?>" class="comic">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="img-wrap">
                        <img src="<?=$img1?>">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="info">
                        <h2><?=$txt1?></h2>
                        <div class="info-block">
                            <p>Writer:</p>
                            <p><?=$writer?></p>
                        </div>
                        <div class="info-block">
                            <p>Publisher:</p>
                            <p><?=$Publisher?></p>
                        </div>
                        <div class="info-block">
                            <p>Bundel:</p>
                            <p><?=$bundel?></p>
                        </div>
                        <div class="info-block">
                            <p>Price:</p>
                            <p><?=$price?></p>
                        </div>
                        <a id="btnAddToCard" href="#">add to card</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="desc">
                        <?=$txt2?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>