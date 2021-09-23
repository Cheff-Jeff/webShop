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
<section class="banner">
    <div class="imgWrap">
        <img src="<?=$img1?>" alt="banner image">
    </div>
    <div class="txtWrap">
        <h1><?=$txt1?></h1>
    </div>
</section>
<section class="new">
    <div class="container bigger">
        <div class="row">
            <div class="col-12">
                <div class="inner">
                    <?php foreach($newComics as $newComic):?>
                        <div class="comic">
                            <a href="/comic/<?=$newComic['slug']?>">
                                <img src="<?=$newComic['imageURL']['large']?>">
                                <p><?=$newComic['title']['rendered']?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="secbanner banner">
    <div class="txtWrap">
        <h2><?=$txt2?></h2>
    </div>
    <div class="imgWrap">
        <img src="<?=$img2?>">
    </div>
</section>
<section class="popular">
    <div class="container-fluid">
        <div class="row">
            <?php foreach($popComics as $popComic):?>
                <div class="col-md-3 smaller">
                    <div class="comic">
                        <a href="/comic/<?=$popComic['slug']?>">
                            <img src="<?=$popComic['imageURL']['large']?>">
                            <p><?=$popComic['title']['rendered']?></p>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>
