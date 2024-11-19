<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("cadastrousuarioturma33","localhost","root", "");

if (!empty($_GET['id']))
    {
        $id=$_GET['id'];
        $usuario->deletarUsuario($id);
    }

    header('location: areaRestrita.php');

?>