<?php
//autoloadoar
// spl_autoload_register(function($class){
//     $path =dirname(__DIR__). '/' . str_replace('\\','/',$class) .'.php'; 
//         if(file_exists($path)){
//             require $path;
//         }
//         var_dump($path);
// });

use Class\Coffe\CoffeMachine;
use Class\Coffe\PrenuimCoffeMachine;
use Class\Reservation\OfficeReservation;

require '../vendor/autoload.php';
// use \Class\Paypal\Payment as PaypalPayment;
// use Class\Stripe\Payment;
// use \Colors\RandomColor;
// $paymentPaypal = new Payment();
// $paymentStripe = new PaypalPayment();

// var_dump($paymentPaypal,$paymentStripe);

// var_dump(RandomColor::one());

// use Class\Reservation\Reservation;
// $statut = 'en attente';
// $reservation = new Reservation();

// var_dump($reservation) ;

// $officeReservation = new OfficeReservation('Réservation pou le mois mars');
// var_dump($officeReservation::getCount());


$coffeMachine = new PrenuimCoffeMachine(6);
$coffeMachine->select('espresso');