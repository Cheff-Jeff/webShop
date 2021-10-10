<?php
    $Page = "Card";
    $JS = "card";
    $CSS = $JS;
    $totalPrize = 0;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/card.php");
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
<?php if(isset($comics)): ?>
    <section class="items">
        <div class="container-fluid smaller">
            <div class="row">
                <?php foreach($comics as $comic): ?>
                    <div class="col-md-12">
                        <div class="comic">
                            <?php
                                $amount;
                                foreach($cookies as $cookie){
                                    if($cookie['id'] == $comic['id']){
                                    $amount =  $cookie['amount'];
                                    }
                                }

                                $totalPrize = calcTotal(floatval($comic['acf']['price']), floatval($amount), $totalPrize);
                            ?>
                            <div class="img-wrap">
                                <img src="<?=$comic['imageURL']['large']?>">
                            </div>
                            <div class="details">
                                <p class="title"><?=$comic['title']['rendered']?></p>
                                <p class="writer"><?=$comic['acf']['writer']?></p>
                                <p class="bundle"><?=$comic['acf']['bundel']?></p>
                            </div>
                            <div class="amount">
                                <p><?=$amount?></p>
                            </div>
                            <div class="price">
                                <p><?=str_replace('.',',',$comic['acf']['price'])?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="total">
        <p><?=str_replace('.',',',$totalPrize)?></p>
    </div>
<?php endif; ?>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>