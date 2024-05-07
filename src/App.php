<?php 


namespace Source;

use Exceptions\RouteNotFoundException;
use Router\Router;

class App {

    public function __construct(private Router $router , private string $requ_uri )
    {
        
    }

        public function run(){

            try {
                echo $this->router->run($this->requ_uri);
               } catch (RouteNotFoundException $e) {
                  echo $e->getMessage() ;
               }
        }
     
}