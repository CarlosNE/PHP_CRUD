<?php
require_once "../Model/UsuarioModel.php";
require_once "../View/LoginView.php";
require_once "UserController.php";
class LogInController
{

    private LoginView $view;
    private UsuarioModel $model;
    private UserController $userController;

    public function __construct()
    {
        $this->view = new LoginView();
        $this->model = new UsuarioModel();
        $this->userController = new UserController();
    }

    public function index()
    {
        $this->view->login();
    }

    public function showRegister()
    {
        $this->view->register();
    }
    public function register()
    {
        $email = isset($_POST["email"]) ? $_POST["email"] : null;
        $password = isset($_POST["password"]) ? $_POST["password"] : null;

        if($email && $password)
        {
            session_start();
            $_SESSION["email"] = $email;
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            $this->model->postUsuario($email,$passwordHashed);
            header('Location: /usersCRUD/usuarios');
        }
        else
        {
            header('Location: /usersCRUD/login');
        }

    }

    public function logIn()
    {
        $email = isset($_POST["email"]) ? $_POST["email"] : null;
        $password = isset($_POST["password"]) ? $_POST["password"] : null;
        if($email && $password)
        {
            $arregloDB = $this->model->getUsuarioByEmailAndPassword($email);
            $userDB = $arregloDB[0];
            if(!empty($userDB) && password_verify($password, $userDB["password"]))
            {
                session_start();
                $_SESSION["email"] = $userDB["email"];
                header('Location: /usersCRUD/');
            }
            else
            {
                header('Location: /usersCRUD/login');
            }
        }

    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: login');
    }

}