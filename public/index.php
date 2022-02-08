<?php
    require_once __DIR__ . '/../includes/app.php';

    use MVC\Router;
    use Controllers\AutomovilController;
    use Controllers\LoginController;

    $router = new Router();

    $router->get('/',[AutomovilController::class,'index']);
    $router->get('/login',[LoginController::class,'login']);
    $router->post('/login',[LoginController::class,'login']);
    $router->get('/login/credenciales',[LoginController::class,'credenciales']);
    $router->post('/login/credenciales',[LoginController::class,'credenciales']);
    
    $router->comprobarRutas();