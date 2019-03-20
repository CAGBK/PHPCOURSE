<?php

//Esto es una función en php
function functionName()
{
    echo"Hola soy una función.<br>";

}

functionName();


//funciones con paramentros 
$adios = "adios bro <br>"; 

function despedida( $adios){

    echo $adios;
}

despedida("chao<br>");

//Funciones con retorno 
function retornar ($retorno){

    return $retorno;

}
    echo retornar ("retorno") 
?>
