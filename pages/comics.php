<?php
    $Page = "Home";
    $JS = "home";
    $CSS = $JS;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/comics.php");
    include_once($root."/pages/templates/top.php");
?>
<section class="comics">
    <?php foreach($Comics as $comic): ?>
        <div class="comic">
            <a href="/comic/<?=$comic['slug']?>">
                <img src="<?=$comic['imageURL']['large']?>" style="max-width: 150px;">
                <span><?=$comic['title']['rendered']?></span>
            </a>
        </div>
    <?php endforeach; ?>
</section>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>