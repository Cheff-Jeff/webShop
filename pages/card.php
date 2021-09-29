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
<?php if(isset($comics)): ?>
    <section class="items">
        <?php foreach($comics as $comic): ?>
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
                <p><?=$comic['title']['rendered']?></p>
                <p><?=$amount?></p>
                <p><?=str_replace('.',',',$comic['acf']['price'])?></p>
            </div>
        <?php endforeach; ?>
    </section>
    <div class="total">
        <p><?=str_replace('.',',',$totalPrize)?></p>
    </div>
<?php endif; ?>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>