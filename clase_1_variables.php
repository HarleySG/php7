<?php

/**
 * Variables
 * 
 * PHP maneja tipado dinámico
 * camelCase sensitive
 * 
 * Sintaxis: $varName = x;
 *      X - No se puede nombrar una variable que empieze con numero
 *      Ejemplo:
 *          $3varName = x;
 */

/**
 * RECOMENDACION:
 * Definir nombres de variable que el nomobre de las variable describran el contenido de la misma.
 */

 $tres = 3;
//  var_dump($tres);

 $pi = 3.1416;
//  var_dump($pi);

 $nombre = 'Luis';
 $Nombre = 'Carlos';
//  var_dump($nombre.' - '.$Nombre);

/**
 * BOOLEAN
 * true - false
 */

 $fooFalse = false;
 $fooTrue = true;
//  var_dump($fooFalse);
//  var_dump($fooTrue);


/**
 * ARRAY
 */

 $fooArray = [1, 2, 3];
 $barArray = array(4, 5, 6);
 $mixinArray = [7, 'foo text', 9];
//  var_dump($fooArray);
//  var_dump($barArray);
//  var_dump($mixinArray);


 /**
  * Asignación especial
  */

// Opción 1 de asignación
 $polo = 2;
 $polo = $polo + 1;
 var_dump($polo);
 // Opción 2 de asignación
 $polo += 8;
 var_dump($polo);
 // Opción 3 de asignación
 $polo --;
 var_dump($polo);
 $polo ++;
 var_dump($polo);

 /**
  * Uso de variables en comillas dobles y simples
  */

  $foovar = "Diferencias de usar variables en comillas doble y comillas simples";

  var_dump("---< $foovar");
  var_dump('----> $foovar');


?>