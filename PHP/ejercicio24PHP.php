<?php
$v ="Arturo";
unset($v);
if (!isset ($v)) 
print('la variable ya no existe'); 
?>
<?php
print(empty($v)); //devuelve true
$v=" "; print(empty($v)); // devuelve tb
?>

<?php
function suma($paramatro1, $paramatro2){
    $resultado = $paramatro1 + $paramatro2;
    return $resultado;
}
$suma = suma(5,7);
echo $suma;
?>