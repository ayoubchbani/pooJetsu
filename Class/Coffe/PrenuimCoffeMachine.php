<?php

namespace Class\Coffe; 

class PrenuimCoffeMachine extends CoffeMachine{

        public function  __construct(int $cups)
        {
            parent::__construct($cups);
            var_dump('ezzzezze');
        }

        public function select(string $selection)
        {
           $result =  match($selection){
                'espresso' =>$this->makeEspresso(),
                'vanilla'=>$this->makeVanilla(),
                default => 'erreur'
            };
            return $result ; 
        }
        protected function makeVanilla():void
        {
            for($i = 0; $i< $this->cups ; $i++)
            {
                echo 'Café Vanilla num '.($i+1).' Servi ' ;
            }
        }

}