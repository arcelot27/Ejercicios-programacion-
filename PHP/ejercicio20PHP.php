<?php
$i= 0;
$array ="Tecnologo ADSO";
while ($i <= strlen($array)-1 ){
  print $array[$i]. " ";
    $i++;
  print "<br>";
}
echo "<br>";
?>
<?php
$i= 0;
$palabra ="Tecnologo en ADSO";
while ($i <= strlen($palabra)-1 ){
  print"[".substr($palabra,$i)."]<br>";
    $i++;
}
?>