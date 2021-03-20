<?php
require_once "../Model/UsuarioModel.php";
require_once "../View/UsuarioView.php";

class UserController
{
    private UsuarioView $view;
    private UsuarioModel $model;
    public function __construct()
    {
        $this->model = new UsuarioModel();
        $this->view = new UsuarioView();
    }

    function index()
    {
        $usuarios = $this->model->getUsuarios();
        $this->view->mostrarUsuarios($usuarios);
    }

    public function formEditUsuario($params)
    {
        $id = $params[0];
        $arregloUsuario = $this->model->getUsuario($id);
        $usuario = $arregloUsuario[0];
        if($usuario){
            $id = $usuario["id"];
            $email = $usuario["email"];
            $password = $usuario["password"];
            $this->view->mostrarUsuario($id, $email, $password);
        }
    }

    public function editUsuario($params)
    {
        $id = isset($_POST["id"]) ? $_POST["id"] : null;
        $email = isset($_POST["email"]) ? $_POST["email"] : null;
        $password = isset($_POST["password"]) ? $_POST["password"] : null;
        if($id && $email && $password)
        {
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            $this->model->putUsuario($id, $email, $passwordHashed);
            header('Location: /usersCRUD');
        }
    }

    public function deleteUsuario($params)
    {
        $id = isset($params[0]) ? $params[0] : null;
        if($id)
        {
            $this->model->deleteUsuario($id);
            header('Location: /usersCRUD');
        }
    }

    public function formPostUsuario()
    {
        $this->view->create();
    }

    public function postUsuario()
    {
        $email = isset($_POST["email"]) ? $_POST["email"] : null;
        $password = isset($_POST["password"]) ? $_POST["password"] : null;

        if($email && $password){
            $passwordHASH = password_hash($password, PASSWORD_DEFAULT);
            $this->model->postUsuario($email, $passwordHASH);
            header('Location: /usersCRUD');
        }
    }

}