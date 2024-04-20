<?php

namespace Class\Coffe ;

use Class\Traits\IrishCoffeTrait;

class MultipeCoffeeMachine extends coffeMaker {
    use IrishCoffeTrait;

    
    public function makeEspressoCoffee():string {
        return static::class.'fait un Espresso.';

    }
  

}