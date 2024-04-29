<?php

use Router\Router;

require './../vendor/autoload.php';

echo 'HomePage';
$route = new Router();



$route->register('/',function(){
    return 'HomePage' ;
});
$route->register('/',function(){
    return 'Contact page' ;
});

echo '<pre>';
var_dump($route);
echo '<pre>';

// $router->run();