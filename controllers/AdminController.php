<?php

namespace Controllers;
use MVC\Router;

class AdminController{
    public function options(Router $router){
        $router->render('admin/options',[

        ]);
    }

    public function citiesDealerships(Router $router){
        echo "lista  de concesionarias";
    }

    public function validateDealerships(Router $router){
        echo "validar concesionarias";
    }

    // public function newDealership(Router $router){
    //     echo "nueva concesionaria";
    // }
    
    
}