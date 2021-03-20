<?php


require_once "Router.php";
require_once "../Controller/UserController.php";
require_once "../Controller/LogInController.php";
require_once "../Controller/SessionController.php";
$router = new Router();
$userController = new UserController();
$loginController = new LogInController();
session_start();
if(isset($_SESSION["email"]))
{
    switch($router->action) {
        case '':
            $userController->index();
            break;
        case 'create':
            $userController->formPostUsuario();
            break;
        case 'edit':
            $userController->formEditUsuario($router->params);
            break;
        case 'post':
            $userController->postUsuario();
            break;
        case 'put':
            $userController->editUsuario($router->params);
            break;
        case 'delete':
            $userController->deleteUsuario($router->params);
            break;
        case 'logout':
            $loginController->logout();
        default:
            $userController->index();
    };
}
else
{
    switch ($router->action)
    {
        case 'login':
            $loginController->index();
            break;
        case 'verifyLogin':
            $loginController->login();
            break;
        case 'register':
            $loginController->showRegister();
            break;
        case 'verifyRegister':
            $loginController->register();
            break;
        default :
            $loginController->index();
            break;
    }
}



//if($router->action === "verifyLogin" && !isset($_SESSION["email"]))
//{
//    $loginController->logIn();
//
//}else if(!isset($_SESSION["email"]) && $router->action != "" && $router->action != "edit")
//{
//    $loginController->index();
//}
