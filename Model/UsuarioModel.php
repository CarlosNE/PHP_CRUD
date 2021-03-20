<?php

class UsuarioModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=php_crud;charset=utf8','root','');
    }

    function getUsuarios(): array
    {
        try{

            $sentencia = $this->db->prepare("SELECT * FROM usuario");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception)
        {
            print_r($exception);
        }
    }

    function getUsuario($id): array
    {
        try
        {
            $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id=?");
            $sentencia->execute([$id]);
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $exception)
        {
            print_r($exception);
        }
    }


    function postUsuario(string $email, string $password)
    {
        try
        {
            $sentencia = $this->db->prepare("INSERT INTO usuario(email, password) VALUES(?,?)");
            $sentencia->execute([$email, $password]);
        }
        catch (PDOException $exception)
        {
            print_r($exception);
        }

    }

    function deleteUsuario($id)
    {
        try
        {
            $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
            $sentencia->execute([$id]);
        }
        catch (PDOException $exception)
        {
            print_r($exception);
        }
    }

    function putUsuario($id, $email, $password)
    {
        try
        {
            $sentencia = $this->db->prepare("UPDATE usuario SET email=?, password=? WHERE id=? ");
            $sentencia->execute([$email,$password, $id]);
        }
        catch (PDOException $exception)
        {
            print_r($exception);
        }
    }

    public function logIn(mixed $email, mixed $password)
    {

    }

    public function getUsuarioByEmailAndPassword(mixed $email)
    {
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=? LIMIT 1");
        $sentencia->execute([$email]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

}