<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="$_GET">
        <label for="">digite un numero</label>
        <input type="number" name="num">
        <input type="submit" name="enviar">
    </form>
</body>
</html>
<?php
    $opc=$_GET['num'];
    switch ($opc){
        case 1:
            echo "El dia que escoge es lunes";
            break;
        case 2:
            echo "el dua que escoge es martes";
            break;
        case 3:
            echo "el dua que escoge es miercoles";
            break;
        case 4:
            echo "el dua que escoge es jueves";
            break;
        case 5:
            echo "el dua que escoge es viernes";
            break;
        case 6:
            echo "el dua que escoge es sabado";
            break;
        case 7:
            echo "el dua que escoge es domingo";
        default:
            echo "No reconoce el dia";
    }
?>

