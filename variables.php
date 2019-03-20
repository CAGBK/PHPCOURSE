<?php
//variable numerica 
 $numeroUno = 1; 
    echo "Mi numero ".$numeroUno;
    echo "<br><br>";
    echo "$numeroUno"; 
    var_dump($numeroUno);

//Variable texto 
$palabra = "Hola soy variable";
    echo "<br><br>";
    echo "$palabra";
    var_dump($palabra);

//Boleana 
$bool = true ; 
    echo "esto es una variable bool true";
    echo "<br><br>";
    var_dump($bool);
//Variable Arreglo 
$colores = array("<br>", "azul", "gris", "Hola soy la posición 4 del array" );
    echo "Hola soy un br dentro de un array $colores[0]";
    echo "<br>";
    var_dump($colores);
    echo "esto es un arreglo $colores[1]";
    echo "$colores[3]";
    echo "<br><br>";
//variable con propiedades.
$verduras = array("verdura"=>"lechuga", "fruta"=>"banano");
    echo "esto es una variable arreglo con propiedades $verduras[verdura] ";
    echo "<br><br>";
    var_dump($verduras);

//variables de tipo objeto
$frutas = (object)["fruta"=>"pera", "furta2"=>"manzana"];
    echo "esto es un objeto $frutas->furta2";
    echo "<br><br>"; 
    var_dump($frutas);
?>