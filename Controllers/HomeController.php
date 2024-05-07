<?php

namespace Controllers;

use Source\Render;
use Models\User; 

class HomeController {

    public function index() :Render{

       $userModel = new User(); 

       $users = $userModel->all();
            
       return  Render::make('home/index',compact('users'));
    }

}