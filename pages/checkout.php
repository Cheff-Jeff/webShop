<?php
    $Page = "Checkout";
    $JS = "checkout";
    $CSS = $JS;
    $totalPrize = 0;
    if(is_null($root)){
        include_once('../config.php');
    }
    include_once($root."/src/php/pages/checkout.php");
    include_once($root."/pages/templates/top.php");
?>

<form id="payment-form">
    <div id="card-element"><!--Stripe.js injects the Card Element--></div>
    <button id="submit">
    <div class="spinner hidden" id="spinner"></div>
    <span id="button-text">Pay now</span>
    </button>
    <p id="card-error" role="alert"></p>
    <p class="result-message hidden">
    Payment succeeded, see the result in your
    <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
    </p>
</form>
<?php 
    include_once($root."/pages/templates/bottom.php");
?>