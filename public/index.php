<?php
//autoloadoar
// spl_autoload_register(function($class){
//     $path =dirname(__DIR__). '/' . str_replace('\\','/',$class) .'.php'; 
//         if(file_exists($path)){
//             require $path;
//         }
//         var_dump($path);
// });
require '../vendor/autoload.php';
use \Class\Paypal\Payment as PaypalPayment;
use Class\Stripe\Payment;
use \Colors\RandomColor;
$paymentPaypal = new Payment();
$paymentStripe = new PaypalPayment();

var_dump($paymentPaypal,$paymentStripe);

var_dump(RandomColor::one());