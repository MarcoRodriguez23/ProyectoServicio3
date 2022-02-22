<?php

namespace Controllers;
use MVC\Router;

class LoginController{

    public function login(Router $router){

        $router->render('auth/opciones',[
            
        ]);
    }

    public function credenciales(Router $router){
        $router->render('auth/credenciales',[

        ]);
    }

    public function logout(Router $router){

        echo "desde logout";
    }

    public function olvide(){
        echo "desde olvide";

    }
    public function recuperar(){
        echo "desde recuperar";
    }

    public function crear(){
        echo "desde crear cuenta";
    }

}