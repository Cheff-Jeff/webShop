<?php
    $Page = "Comics";
    $JS = "comics";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/comics.php");
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
<section class="comics">
    <div class="container-fluid lesser">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-9">
                <div class="inner">
                    <div class="row">
                        <?php foreach($Comics as $comic): ?>
                            <div class="col-md-3 smaller">
                                <div class="comic">
                                    <a href="/comic/<?=$comic['slug']?>">
                                        <img src="<?=$comic['imageURL']['large']?>">
                                        <span><?=$comic['title']['rendered']?></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>