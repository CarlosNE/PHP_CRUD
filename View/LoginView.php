<?php

class LoginView
{
    private function nav(): string
    {
        $html =  '<nav style="display: flex;justify-content: space-between;
                    padding-top: 0px;padding: 20px;background: #cc1e4c;}">
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
    public function login()
    {
        $html = $this->header();
        $html.= $this->nav();
        $html.= '<article class="container">
                <h1 style="text-align: center;">Bienvenido a la aplicacion CRUD de usuarios</h1>
                <section class="main" style="display: grid;grid-template-columns: 1fr;background: #eaeaea;text-align: center;border: 1px solid #cc1e4c;
                    place-self: center;border-radius: 10px;padding-top: 15px;padding-bottom: 30px;padding-left: 30px;
                    padding-right: 30px;width: 70%;margin: auto;margin-top: 50px;">
                    <div class="login">
                        <h2>Login</h2>
                        <form enctype="multipart/form-data" id="loginForm" action="/usersCRUD/verifyLogin" method="post" name="loginForm">
                            <div id="email">
                                <label for="email">Email</label>
                                <input name="email" type="email" placeholder="usuario@email.com" autocomplete="off" autofocus required>
                            </div>
                            <div id="password">
                                <label for="password">Password</label>
                                <input name="password" type="password" placeholder="**********" autocomplete="off" required>
                            </div>
                            <button id="btn-login" type="submit" name="btnLogin">Log In</button>
                        </form>
                    </div>
                </section>
            </article>';
        echo $html;
    }

    public function register()
    {
        $html = $this->header();
        $html.= $this->nav();
        $html.= '<article class="container">
                <h1 style="text-align: center;" >Bienvenido a la aplicacion CRUD de usuarios</h1>
                <section class="main" style="display: grid;grid-template-columns: 1fr;background: #eaeaea;text-align: center;border: 1px solid #cc1e4c;
                    place-self: center;border-radius: 10px;padding-top: 15px;padding-bottom: 30px;padding-left: 30px;
                    padding-right: 30px;width: 70%;margin: auto;margin-top: 50px;">
                    <div class="login">
                        <h2>Registrarse</h2>
                        <form enctype="multipart/form-data" id="loginForm" action="/usersCRUD/verifyRegister" method="post" name="loginForm">
                            <div id="email">
                                <label for="email">Email</label>
                                <input name="email" type="email" placeholder="usuario@email.com" autocomplete="off" autofocus required>
                            </div>
                            <div id="password">
                                <label for="password">Password</label>
                                <input name="password" type="password" placeholder="**********" autocomplete="off" required>
                            </div>
                            <button id="btn-login" type="submit" name="btnLogin">Registrarme</button>
                        </form>
                    </div>
                </section>
            </article>';
        echo $html;
    }

}