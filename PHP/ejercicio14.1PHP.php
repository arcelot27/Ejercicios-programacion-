<?php
    $case = [$_GET['num1']];
    $case = [$_GET['num2']];
    $case = [$_GET['num3']];
    $case = [$_GET['num4']];
    $case = [$_GET['num5']];
    $n = count($case);
    for ( $contador = 0; $contador < $n; $contador++)
    {
        if ($contador == 0){
            $mayor = $case[0];
        }
        else{
            if($case[$contador]> $mayor){
                $mayor = $case[$contador];
            }
        }
    }
   echo "mayor: ";
   echo $mayor;
?>

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
        <label for="">Escribe un numero</label>
        <input type="number" name="num1">
        <label for="">Escribe un numero</label>
        <input type="number" name="num2">
        <label for="">Escribe un numero</label>
        <input type="number" name="num3">
        <label for="">Escribe un numero</label>
        <input type="number" name="num4">
        <label for="">Escribe un numero</label>
        <input type="number" name="num5">

        <input type="submit" name="enviar">

    </form>
</body>
</html>







