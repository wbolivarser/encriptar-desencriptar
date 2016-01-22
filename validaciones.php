<?php

function validar_letras($param,$min,$max){

$patron = "/^[a-zA-Z]{".$min.",".$max."}$/"; //Solo letras
if (preg_match($patron,$param)==0) return false;
else return true;

}

function validar_numeros($param,$min,$max){

$patron_numeros = "/^[0-9]{".$min.",".$max."}$/"; //solo numeros
if (preg_match($patron_numeros,$param)==0) return false;
else return true;

}

function validar_letras_espacio($param,$min,$max){

$patron = "/^[A-Za-z0-9\ñ\s]{".$min.",".$max."}$/"; //Solo letras
if (preg_match($patron,$param)==0) return false;
else return true;

}


?>
