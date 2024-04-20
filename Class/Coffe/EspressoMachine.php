<?php 


namespace Class\Coffe ;

use Class\Traits\EsspressoCoffeTrait;

class EspressoMachine extends coffeMaker  {

    use EsspressoCoffeTrait ; 

    public function callEspresso(){

        return $this->makeEspressoCoffee();
    }
}