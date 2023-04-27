

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">usuario</label>
        <input type="text" name="user">
        <label for="">contraseña</label>
        <input type="text" name="password">

        <input type="submit" name="enviar">
    </form>
</body>
</html>


<?php
    $usuario = $_GET['user'];
    $password = $_GET['password'];

    if (($usuario == "usuario") && ($password == "18"))
    {
        print ("<ul>\n");
        $i=1;
        while ($i <= 18) {
            print ("<li> tienes  $i </li>\n");
            $i++;
        }
        print ("</ul>\n");
    }
    else {
        print "usted no puede ingresar";
    }
   
?>