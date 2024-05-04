<?php

use Exceptions\RouteNotFoundException;
use Router\Router;

require './../vendor/autoload.php';

$route = new Router();

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'. DIRECTORY_SEPARATOR);
$route->register('/',['Controllers\HomeController','index']);
// $route->register('/',function(){
//     return 'HomePage' ;
// });
// $route->register('/contact',function(){
//     return 'ContactPage' ;
// });

try {
 echo $route->run($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
   echo $e->getMessage() ;
}
echo '<pre>';
