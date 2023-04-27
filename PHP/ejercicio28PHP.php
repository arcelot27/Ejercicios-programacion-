

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
    <div class="container-md"><br><br><br>
        <div class="text-bg-dark p-3">
            <form  method="get" class="container-fluid" >
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
                <center><input type="submit" class="btn btn-light" value="verificar datos"></center>
            </form>
        </div>

        </div>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<?php
function suma($a,$b){
    $r = $a + $b;
    return $r;
}
$a = $_GET['num1'];
$b = $_GET['num2'];
$c= suma ($a,$b);
print $c;
?>