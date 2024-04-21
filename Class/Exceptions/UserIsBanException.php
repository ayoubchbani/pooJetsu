<?php 


namespace Class\Exceptions ;

use Exception;
use Throwable;

class UserIsBanException extends \Exception 
{
    protected $message = 'utilisateur est bani' ; 

}