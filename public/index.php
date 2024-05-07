<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Source\App;

require './../vendor/autoload.php';

$router = new Router();

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'. DIRECTORY_SEPARATOR);
$router->register('/',['Controllers\HomeController','index']);
// $route->register('/',function(){
//     return 'HomePage' ;
// });
// $route->register('/contact',function(){
//     return 'ContactPage' ;
// });

(new App($router,$_SERVER['REQUEST_URI']))->run();
echo '<pre>';
