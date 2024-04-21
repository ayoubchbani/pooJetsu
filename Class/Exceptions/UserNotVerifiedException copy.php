<?php 


namespace Class\Exceptions ;

use Exception;
use Throwable;

class UserNotVerifiedException extends \Exception 
{
    protected $message = 'utilisateur non vérifié' ; 

}