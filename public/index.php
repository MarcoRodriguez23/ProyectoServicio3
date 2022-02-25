<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\UserController;

$router = new Router();

//iniciar Sesion
$router->get('/login',[LoginController::class,'login']);
$router->post('/login',[LoginController::class,'login']);
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
$router->get('/options-buy',[UserController::class,'optionsBuy']); 
$router->get('/options-sell',[UserController::class,'optionsSell']); 
$router->get('/dates',[UserController::class,'dates']); 
$router->get('/date',[UserController::class,'individualDate']); 

//menu de compra
$router->get('/',[UserController::class,'buy']); 
$router->get('/buy-myInterest',[UserController::class,'myInterest']); 
$router->get('/dates',[UserController::class,'dates']);

//menu de venta
$router->get('/sell-newCar',[UserController::class,'sell']); 
$router->get('/sell-record',[UserController::class,'sellRecord']); 

//proceso de compra
$router->get('/buy-aboutCar',[UserController::class,'individualCar']);
$router->get('/buy-schedule',[UserController::class,'schedule']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

    