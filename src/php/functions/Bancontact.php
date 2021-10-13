<?php
if(!isset($root) || is_null($root)){
include_once("../../../config.php");
}
require $root.'/vendor/autoload.php';
// This is your real test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51Igc7UKZIkFEWPuFS51gPNQz4Isxa5dVCKUFP6FSxWdtGyVeuY9J2fKG1arhk6iR9Nto7R0RUp1BjomndwGjiAaQ000I1Dn609');

$intent = \Stripe\PaymentIntent::create([
'amount' => 1099,
'currency' => 'eur',
'payment_method_types' => ['bancontact'],
'payment_method_options' => [
    'bancontact' => [
    'preferred_language' => 'nl',
    ],
],
]);

echo json_encode(array('client_secret' => $intent->client_secret));