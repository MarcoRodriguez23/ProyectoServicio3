<?php

namespace Controllers;
use MVC\Router;

class AutomovilController{

    public function index(Router $router){

        $router->view('/compra/listado',[

        ]);
    }
}
