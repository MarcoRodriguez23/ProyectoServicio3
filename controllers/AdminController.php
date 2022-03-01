<?php

namespace Controllers;
use MVC\Router;

class AdminController{
    public function options(Router $router){
        $router->render('admin/options',[

        ]);
    }

    public function citiesDealerships(Router $router){
        $router->render('admin/citiesDealerships',[

        ]);
    }

    public function validateDealerships(Router $router){
        $router->render('admin/validateDealerships',[

        ]);
    }

    public function newDealership(Router $router){
        $router->render('admin/createDealership',[

        ]);
    }

    public function dealerships(Router $router){
        $router->render('admin/dealerships',[

        ]);
    }

    public function cars(Router $router){
        $router->render('admin/cars',[
            
        ]);
    }
    
    
}