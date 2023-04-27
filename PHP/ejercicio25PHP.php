
<?php
function suma($paramatro1, $paramatro2){
    $resultado = $paramatro1 + $paramatro2;
    return $resultado;
}
$suma = suma(1,1);
echo $suma;
print("<br><br><br>") //suma
?>

<?php
function multiplicación($num1, $num2){
    $resultado= $num1 * $num2;
    return $resultado;
}
$a = multiplicación(6,2);
echo $a; //multiplicación 
print("<br><br><br>")
?>

<?php
function cuadrado($num = 1){
    return($num*$num);
}
$a = cuadrado(2) + cuadrado();
echo $a;
?>