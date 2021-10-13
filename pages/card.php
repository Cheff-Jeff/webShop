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
                    <div class="col-md-12 comic-wrap">
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
                            <div class="row">
                                <div class="col-md-2">
                                <div class="img-wrap">
                                    <img src="<?=$comic['imageURL']['large']?>">
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="details">
                                        <p class="title"><?=$comic['title']['rendered']?></p>
                                        <p class="writer"><?=$comic['acf']['writer']?></p>
                                        <p class="bundle"><?=$comic['acf']['bundel']?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="shipping-date">
                                        <p>shipping September 18</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="amount">
                                        <p>Amount: <?=$amount?></p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="price">
                                        <p>&euro; <?=str_replace('.',',',$comic['acf']['price'])?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="pricing">
        <div class="container-fluid smaller">
            <div class="price-wrap">
                <div class="total">
                    <p>Total price</p>
                    <p>&euro; <?=str_replace('.',',',$totalPrize)?></p>
                </div>
                <div class="shiping-cost">
                    <p>Shipping costs</p>
                    <p>&euro; 2.00</p>
                </div>
                <div class="new-total">
                    <?php
                        $newprice = $totalPrize + 2;
                        $newprice = str_replace('.',',',$newprice);
                    ?>
                    <p>Total</p>
                    <p>&euro; <?=$newprice?></p>
                </div>
                <div class="btn-wrap">
                    <a class="main-btn" href="#">Order</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>