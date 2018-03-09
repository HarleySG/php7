<?php

/**
 * Array indexado
 * 
 * Forma 1 de array --> $lenguajeA = array('HTML','CSS','JS');
 * Forma 2 de array --> $lenguajeB = ['HTML','CSS','JS']; (el soporte a esta forma se da desde PHP 5.4)
 */

 // array de Strings
 $lenguajeA = array('HTML','CSS','JS');
 $lenguajeB = ['HTML','CSS','JS'];
 // var_dump($lenguajeA);
 // var_dump($lenguajeB);

 // array de enteros
 $integers = [3, 6, 9, 12];
//  var_dump($integers);

 // array de floats
 $floats = [3.2, 6.234, 9.0342, 12.0234];
//  var_dump($floats);

/**
 * RECOMENDACION:
 * Definir nombres de variable que el nomobre de las variable describran el contenido de la misma.
 */

 // array de arrays
 $arr = [$integers, $floats];
 var_dump($arr);

?>