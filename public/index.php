<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\AdminController;
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

//administrador
$router->get('/admin-options',[AdminController::class,'options']);
$router->get('/admin-cities',[AdminController::class,'citiesDealerships']);
$router->get('/admin-dealerships',[AdminController::class,'dealerships']);
$router->get('/admin-cars',[AdminController::class,'cars']);
$router->get('/admin-car',[AdminController::class,'car']);
$router->get('/admin-clients',[AdminController::class,'clients']);
$router->get('/admin-client',[AdminController::class,'client']);
$router->get('/admin-dates',[AdminController::class,'dates']);
$router->get('/admin-date',[AdminController::class,'date']);
$router->get('/admin-validate-dealerships',[AdminController::class,'validateDealerships']);
$router->get('/admin-validate-dealership',[AdminController::class,'validateDealership']);
$router->get('/admin-new-dealership',[AdminController::class,'newDealership']);


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

    