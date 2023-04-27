<?php
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];

    if (($usuario == "leonardo") && ($password == "leonardo123"))
    {
        print "Bienvenido al sistema";
    }
    else {
        print "usted no puede ingresar";
    }
   
?>