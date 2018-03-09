<?php

/**
 * Concatenar
 * Unir 2 o mas cadenas de caracteres o tipos de datos
  */

  $fooVar = "Hola ";
  $barVar = 'mundo';
  $xVar   = ' desde php';

  var_dump($fooVar . $barVar . $xVar . ' :)');
  
/**
 * Concatenar con varios tipos de datos
 * Podemos concatenar diferentes tipos de variables
 * @var float
 */ 
  $floatVar = 20.99;
  
  var_dump($fooVar . $barVar . $xVar . ' :) ' . $floatVar);

/**
 * En JavaScript el  + se usa para concatenar, 
 * pero en PHP + es puramente matemático
 */

 $sumaString = '3';
 $sumaString2= '5';

 var_dump($sumaString + $sumaString2);

/**
 * Es una buena práctivca No usar strings en operaciones matemáticas
 */

?>