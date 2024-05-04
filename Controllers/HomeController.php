<?php

namespace Controllers;

use Source\Render;

class HomeController {

    public function index() :Render{

        return Render::make('home/index');
        ;
    }

}