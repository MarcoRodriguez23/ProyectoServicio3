<?php

namespace Controllers;
use MVC\Router;

class UserController{

    public function options(Router $router){
        $router->render('user/options',[

        ]);
    }

    public function profile(Router $router){
        $router->render('user/profile',[

        ]);
    }

    public function optionsSell(Router $router){
        $router->render('user/optionsSell',[

        ]);
    }

    public function dates(Router $router){
        $router->render('user/dates',[

        ]);
    }

    public function IndividualDate(Router $router){
        $router->render('user/date',[

        ]);
    }

    public function sell(Router $router){
        $router->render('user/sell',[

        ]);
    }
    public function sellRecord(Router $router){
        $router->render('user/record',[

        ]);
    }

    public function optionsBuy(Router $router){
        $router->render('user/optionsBuy',[

        ]);
    }

    public function myInterest(Router $router){
        $router->render('user/myInterest',[

        ]);
    }

    public function buy(Router $router){
        $router->render('user/index',[

        ]);
    }
    
}