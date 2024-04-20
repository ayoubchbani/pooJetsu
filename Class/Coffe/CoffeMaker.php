<?php 
namespace Class\Coffe;

abstract class coffeMaker   
{

    public function makeCoffe(){
        return static::class .'fait un caffé' ;
    }


}