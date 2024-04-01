<?php
//autoloadoar
// spl_autoload_register(function($class){
//     $path =dirname(__DIR__). '/' . str_replace('\\','/',$class) .'.php'; 
//         if(file_exists($path)){
//             require $path;
//         }
//         var_dump($path);
// });

use Class\BasicPdf;

require '../vendor/autoload.php';


$basicPdf = new BasicPdf();

var_dump($basicPdf->downloadHTML());