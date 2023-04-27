<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body  class="text-bg-light p-3">
    <div class="container-lg"><br><br><br>
        <div class="text-bg-dark p-3">
            <form action=" " method="get" class="container-fluid" >
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">numero 1</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="number"  name="num1" aria-label="Disabled input example">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">numero 2</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number"  name="num2" aria-label="Disabled input example">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">operacion</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="operacion" aria-label="Disabled input example">
                    </div>
                </div>
                <input type="submit" class="btn btn-light" value="verificar datos">
            </form>
        </div>

    </div>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
$operacion =  $_GET['operacion'];
$n1 =  $_GET['num1'];
$n2 =  $_GET['num2'];
function operaciones ($n1,$n2, $operacion)
    {
        $resultado = 0;
        if ($operacion == "sumar")
            {
                $resultado = $n1 + $n2;
            }
            else if($operacion == "restar")
                {
                    $resultado = $n1 - $n2;
                }
                else if($operacion == "multiplicar")
                    {
                        $resultado = $n1 * $n2;
                    }
                    else if($operacion == "dividir")
                    {
                        $resultado = $n1 / $n2;
                    }
                    else
                        {
                            print("operación no valida");
                        }
        return $resultado;
    }
    $r = operaciones($n1, $n2, $operacion);
    echo $r . "<br>";
?>