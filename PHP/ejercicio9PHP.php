<?php 

$mensaje_es = "hola";
$mensaje_en = "Hello";
$mensaje_ar = "مرحبا";
$mensaje_ja = "こんにちは";

$idioma = "ja";
$mensaje = "mensaje_" . $idioma;
print $$mensaje;

$idioma = "es";
$mensaje = "mensaje_" . $idioma;
print $$mensaje;

$idioma = "en";
$mensaje = "mensaje_" . $idioma;
print $$mensaje;

$idioma = "ar";
$mensaje = "mensaje_" . $idioma;
print $$mensaje;

?>