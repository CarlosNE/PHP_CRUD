<?php

class UsuarioView
{


    public function __construct()
    {
    }

    private function nav($usuario = ''): string
    {
        $html = '<nav style="display: flex;justify-content: space-between;
                    padding-top: 0px;padding: 20px;background: #cc1e4c;}">';
        if($usuario != '')
        {
            $html.= '<a style="color: white;text-decoration: none;" class="active" href="/usersCRUD/">Usuarios</a>';
            $html.= '<a style="color: white;text-decoration: none;" href="/usersCRUD/create">Crear Usuario</a>';
            $html.='<a style="color: white;text-decoration: none;" href="/usersCRUD/logout">Cerrar Sesion</a>';
        }
        else
        {
            $html.='<a style="color: white;text-decoration: none;"href="/usersCRUD/login">Log In</a>';
            $html.='<a style="color: white;text-decoration: none;" href="/usersCRUD/register">Registrarse</a>';
        }
        $html.='</nav>';
        return $html;

    }
    private function header(): string
    {
        $html = '
        <!doctype html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport"
                          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link rel="icon" type="image/png" href="../public/img/favicon.png" sizes="any">
                    <link rel="preconnect" href="https://fonts.gstatic.com">
                    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
                    <link rel="stylesheet" href="./css/header.css">
                    <link rel="stylesheet" href="./css/nav.css">
                    <link rel="stylesheet" href="./css/footer.css">
                    <link rel="stylesheet" href="./css/index.css">
                    <title>Users CRUD</title>
                </head>
        <body style="font-family:Roboto,sans-serif">';
        return $html;
    }

    public function register()
    {

    }

    public function create()
    {
        $html = $this->header();
        $html.= $this->nav('usuario');
        $html.= '<section style="display: grid;grid-template-columns: 1fr;background: #eaeaea;text-align: center;border: 1px solid #cc1e4c;
                    place-self: center;border-radius: 10px;padding-top: 15px;padding-bottom: 30px;padding-left: 30px;
                    padding-right: 30px;width: 70%;margin: auto;">
                    <h2>Crear Usuario</h2>
                    <form method="post" action="/usersCRUD/post/">';
        $html.=' <label for="email" >Email</label>
                    <input name="email" type="email" value="">
                    <label for="password">Password</label>
                    <input name="password" type="password">
                    <button style="text-decoration: none;cursor: pointer;border: 1px solid black;border-radius: 5px;padding: 1px;color: #cc1e4c;font-size: 15px;" type="submit">Crear</button>
                    <a href="/usersCRUD/" style="text-decoration: none;cursor: pointer;border: 1px solid black;border-radius: 5px;padding: 1px;color: #cc1e4c;font-size: 15px;" type="submit">Cancelar</a>
                    </form>
                    ';
        echo $html;
    }

    public function mostrarUsuarios(array $usuarios)
    {
        $html = $this->header();
        $html.= $this->nav('usuario');
        $html.= '<section style="display: grid;grid-template-columns: 1fr;background: #eaeaea;text-align: center;border: 1px solid #cc1e4c;
                    place-self: center;border-radius: 10px;padding-top: 15px;padding-bottom: 30px;padding-left: 30px;
                    padding-right: 30px;width: 70%;margin: auto;margin-top: 50px;">
                    <h2>Lista de usuarios</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($usuarios as $usuario){
            $html.='<tr style="text-align: center;"><td>'.$usuario["id"].'</td>';
            $html.='<td>'.$usuario["email"].'</td>';
            $html.='<td>'.$usuario["password"].'</td>';
            $html.='<td><a style="text-decoration: none;cursor: pointer;border: 1px solid black;border-radius: 5px;padding: 1px;color: #cc1e4c;" href="/usersCRUD/edit/'.$usuario["id"].'">editar</a></td>';
            $html.='<td><a style="text-decoration: none;cursor: pointer;border: 1px solid black;border-radius: 5px;padding: 1px;color: #cc1e4c;" href="/usersCRUD/delete/'.$usuario["id"].'">borrar</a></td></tr>';
        }
        $html.='</tbody></table>';

        echo $html;
    }
    public function mostrarUsuario($id, $email, $password)
    {

        $html = $this->header();
        $html.= $this->nav('usuario');
        $html.= '<section style="display: grid;grid-template-columns: 1fr;background: #eaeaea;text-align: center;border: 1px solid #cc1e4c;
                    place-self: center;border-radius: 10px;padding-top: 15px;padding-bottom: 30px;padding-left: 30px;
                    padding-right: 30px;width: 700px;margin: auto;margin-top: 50px;">
                    <h2>Editar Usuario</h2>
                    <form method="post" action="/usersCRUD/put/' .$id.'">';
        $html.=' <label for="email" >Email</label>
                    <input name="email" type="email" value="'.$email.'">
                    <label for="password">Password</label>
                    <input name="password" type="text" value="'.$password.'">
                    <button  style="font-size: 15px;cursor:pointer; type="submit">Enviar</button>
                    <a  style="text-decoration: none;color: black;border-radius: 3px;border: 1px solid #929292; padding: 1px 6px; cursor:pointer;font-size: 15px;" href="/usersCRUD/" type="submit">Cancelar</a>
                    <input style="visibility:hidden" name="id" type="text" value="'.$id.'">
                    </form>
                    ';

        echo $html;
    }
}