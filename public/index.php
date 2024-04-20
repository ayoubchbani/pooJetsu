<?php
//autoloadoar
// spl_autoload_register(function($class){
//     $path =dirname(__DIR__). '/' . str_replace('\\','/',$class) .'.php'; 
//         if(file_exists($path)){
//             require $path;
//         }
//         var_dump($path);
// });

use Class\Coffe\EspressoMachine;
use Class\Coffe\IrishCoffeeMachine;
use Class\Coffe\MultipeCoffeeMachine;

require '../vendor/autoload.php';


$espresso = new EspressoMachine();
$irishCoffe = new IrishCoffeeMachine();
$multiCoffeMachine = new MultipeCoffeeMachine();
echo '<pre>';
var_dump(
    // $espresso->makeEspressoCoffee(),
    // $irishCoffe->makeIrishCoffee(),
    $espresso->callEspresso(),
   

);
echo '<pre>';