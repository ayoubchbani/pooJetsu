<?php

namespace Class\Traits; 


trait EsspressoCoffeTrait
{
    private float $temperature = 25.5 ;
    protected function makeEspressoCoffee(): string{
        
        return static::class . 'fait un Esspresso';
    }
    public function makeCoffe(){
        return static::class .'fait un caffé (DEPUIS le TRAIT)' ;
    }

}