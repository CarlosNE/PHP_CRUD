<?php


class SessionController
{
    public function __construct()
    {

    }

    public function verifySession()
    {
        session_start();
        if(!isset($_SESSION["email"]))
        {
            header('Location: /usersCRUD/login');
            die();

        }
    }
}