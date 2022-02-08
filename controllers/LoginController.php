<?php

namespace Controllers;
use MVC\Router;

class LoginController{

    public function login(Router $router){

        $router->view('/login/opciones',[

        ]);
    }

    public function credenciales(Router $router){

        $router->view('/login/credenciales',[

        ]);
    }

}
