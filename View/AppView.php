<?php


class AppView
{
    protected function nav(): string
    {
        $html =  '<nav style="display: flex;justify-content: space-between;
                    padding-top: 0px;padding: 20px;background: #cc1e4c;}">
                        <a style="color: white;text-decoration: none;" class="active" href="/usersCRUD/">Usuarios</a>
                        <a style="color: white;text-decoration: none;" href="/usersCRUD/create">Crear Usuario</a>
                        <a style="color: white;text-decoration: none;" href="/usersCRUD/login">Log In</a>
                        <a style="color: white;text-decoration: none;" href="/usersCRUD/register">Registrarse</a>
                    </nav>';

        return $html;


    }
    protected function header(): string
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
}