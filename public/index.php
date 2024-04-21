<?php
//autoloadoar
// spl_autoload_register(function($class){
//     $path =dirname(__DIR__). '/' . str_replace('\\','/',$class) .'.php'; 
//         if(file_exists($path)){
//             require $path;
//         }
//         var_dump($path);
// });

use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserNotVerifiedException;
use Class\Users\Login;
use Class\Users\User;

require '../vendor/autoload.php';
$user  = new User('ayoubchbani','ayoub123456') ; 
$login = new Login($user);
echo '<pre>';

try {
    var_dump(
        $login->login()
    );
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage().' (Trouvé dans la ligne '.$th->getLine().$th->getFile().')' ;
}catch(\Throwable $th){
    echo $th->getMessage().' (Trouvé dans la ligne '.$th->getLine().$th->getFile().')' ; ;

}finally{
    echo 'finally';
}


echo '<pre>';