
<?php
    $nom="Arturo";
    $apel= "Castañeda Murcia";
    $tdoc= "T.I";
    $ndoc= "4646565181161";
    $nmovil= "5465465161651651";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="text-bg-dark p-3">
    <div class="container-sm">
        <div  class="text-bg-light p-3" ><br>
            <form action="ejercicio12PHP.php">
                <div class="container-sm">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">nombre del aprendiz es:</label>
                        <input class="form-control" type="text" value="<?php echo $nom;?>" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">apellidos</label>
                        <input class="form-control" type="text" value="<?php echo $apel;?>" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">tipo de documento</label>
                        <input class="form-control" type="text" value="<?php echo $tdoc;?>" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">num</label>
                        <input class="form-control" type="text" value="<?php echo $ndoc;?>" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">telefono</label>
                        <input class="form-control" type="text" value="<?php echo $nmovil;?>" aria-label="Disabled input example" disabled readonly  /*disabled-bloquear_todo*\ /*readonly-bloquear_contenidosin*\>
                    </div>
                    <center><input type="submit" value="cambiar" onclick="" class="btn btn-outline-dark"></center>
                </div>
            </form>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
