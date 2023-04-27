<?php 


$var1=22;
$var2= 66;

$resultado1 = ($var1 + $var2);
$resultado2 = ($var1 - $var2);
$resultado3 = ($var1 * $var2);
$resultado4 = ($var1 / $var2);

echo"<br>la suma de los numero es:" .$resultado1;
echo"<br>la resta de los numero es:" .$resultado2;
echo"<br>la multiplicacióm de los numero es:" .$resultado3;
echo"<br>la divición de los numero es:" .$resultado4;

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
<body>
    <form action="ejercicio11PHP.php" class="container-fluid">
        <lavel>escriba un numero</label>
        <input value="<?php echo $var1; ?>" class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
        <lavel>escriba un numero</label>
        <input value="<?php echo $var2; ?>" class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
        <input type="submit" class="btn btn-dark">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
