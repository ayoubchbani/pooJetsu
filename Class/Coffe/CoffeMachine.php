<?php

namespace Class\Coffe; 

class CoffeMachine {

    protected int $cups; 
    public function __construct(int $cups)
    {
        $this->cups = $cups;
    }
    public function select(string $selection)
    {
       $result =  match($selection){
            'espresso' =>$this->makeEspresso(),
            default => 'erreur'
        };
        return $result ; 
    }
    protected function makeEspresso():void
    {
        for($i = 0; $i< $this->cups ; $i++)
        {
            echo 'Café Espresso num '.($i+1).' Servi ' ;
        }
    }
   
}