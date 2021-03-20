<?php


class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static array $ACTIONS = [
        ''=> 'UserController#index',
        'create'=>'UserController#formPostUsuario',
        'edit'=>'UserController#formEditUsuario',
        'post'=>'UserController#postUsuario',
        'put'=>'UserController#editUsuario',
        'delete'=>'UserController#deleteUsuario',
        'check'=>'SessionController#verifySession',
        'login'=>'LogInController#index',
        'verifyLogin'=>'LogInController#logIn',
        'register'=>'LogInController#showRegister',
        'verifyRegister'=>'LogInController#register',

    ];

}