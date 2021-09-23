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
                <div class="filter">
                    <h2><?=$txt2?></h2>
                    <?php foreach($parentCategories as $parentCategorie): ?>
                        <?php if($parentCategorie['slug'] != 'geen-categorie'): ?>
                            <div class="option">
                                <div class="titleWrap">
                                    <p class="title"><?=$parentCategorie['name']?></p>
                                    <span class="icon"></span>
                                </div>
                                <div class="sub-option">
                                    <ul>
                                        <?php foreach($Categories as $Categorie): ?>
                                            <?php if($Categorie['parent'] == $parentCategorie['id']): ?>
                                                <li>
                                                    <label class="checkBox">
                                                        <p><?=$Categorie['name']?></p>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>    
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach; ?>
                </div>
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