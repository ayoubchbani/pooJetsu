<?php
//autoloadoar
// spl_autoload_register(function($class){
//     $path =dirname(__DIR__). '/' . str_replace('\\','/',$class) .'.php'; 
//         if(file_exists($path)){
//             require $path;
//         }
//         var_dump($path);
// });

use Class\Peugot;
use Class\Vehicule;

require '../vendor/autoload.php';

$peugot = new Peugot('peugot');
var_dump($peugot->rouler(),$peugot->marque());
