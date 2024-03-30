<?php

namespace Class\Reservation;

use Class\Enums\OfficeStatut;

class Reservation 
{

    public OfficeStatut $status;

    public function __construct()
    {
        $this->status = OfficeStatut::APPROVAL_PENDING;
            
    }
}