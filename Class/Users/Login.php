<?php

namespace Class\Users ;

use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserNotVerifiedException;

class Login {

    public function __construct(protected User $user)
    {
        
    }

    public function login():bool {
        if (!$this->user->isVerified()) {
             throw new UserNotVerifiedException();
            # code...
        }
        if ($this->user->isBan()) {
             throw new UserIsBanException();
            # code...
        }
        return  true ;
    }

}