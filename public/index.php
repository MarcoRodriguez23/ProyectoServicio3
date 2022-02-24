<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AutomovilController;
use Controllers\LoginController;

$router = new Router();

//iniciar Sesion
$router->get('/',[LoginController::class,'login']);
$router->post('/',[LoginController::class,'login']);
$router->get('/credenciales',[LoginController::class,'credenciales']);
$router->post('/credenciales',[LoginController::class,'credenciales']);

//cerrar sesión
$router->get('/logout',[LoginController::class,'logout']);

//recuperar password
$router->get('/olvide',[LoginController::class,'olvide']);  
$router->post('/olvide',[LoginController::class,'olvide']);
$router->get('/recuperar',[LoginController::class,'recuperar']);   
$router->post('/recuperar',[LoginController::class,'recuperar']);

//crear cuenta
$router->get('/crear-cuenta',[LoginController::class,'crear']);  
$router->post('/crear-cuenta',[LoginController::class,'crear']);

//usuario dentro
$router->get('/profile',[UserController::class,'profile']); 
$router->get('/options',[UserController::class,'options']); 
$router->get('/options-buy',[UserController::class,'options-buy']); 
$router->get('/options-sell',[UserController::class,'options-sell']); 
$router->get('/options-dates',[UserController::class,'options-dates']); 

//menu de compra
$router->get('/buy-newCar',[UserController::class,'buy']); 
$router->get('/buy-myInterest',[UserController::class,'myInterest']); 
$router->get('/buy-dates',[UserController::class,'dates']);

//menu de venta
$router->get('/sell-newCar',[UserController::class,'sell']); 
$router->get('/sell-record',[UserController::class,'record']); 

//proceso de compra
$router->get('/buy-aboutCar',[UserController::class,'individualCar']);
$router->get('/buy-schedule',[UserController::class,'schedule']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

    