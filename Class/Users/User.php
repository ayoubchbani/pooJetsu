<?php

namespace Class\Users;
class User {

    public function __construct(public string $username , public string $password)
    {
    
    }

    public function isVerified():bool
    {
        return true ; 
    }
    public function isBan():bool
    {
        return false ; 
    }

}