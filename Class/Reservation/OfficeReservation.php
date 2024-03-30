<?php

namespace Class\Reservation ; 

class OfficeReservation {

    private static int $count =50;    
    public function __construct(
        public string $information

       ) 
       {}

       public static function getCount(): int
       {
        return self::$count;
       }
}