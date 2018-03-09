<?php

/**
 * Casting
 * 
 * Cambiar el tipo de variable
 */

$varString = '32';
$varInteger = 2;
$varFloat = 0.5;
$varArr = [1,2,'3','foo' => false];

/**
 * String to integer
 * 
 * RECORDAR:
 * Si el string a convertir a integer no son caracteres númericos, 
 * la nueva variable tendra valor 0
 * 
 * Ejemplo:
 *      $varString = 'uno';
 *      $stringToInteger = (int) $varString;
 *      var_dump($stringToInteger);
 */

$stringToInteger = (int) $varString;
var_dump($stringToInteger);

/**
 * String to Float
 * 
 * RECORDAR:
 * Si el string a convertir a float no son caracteres númericos, 
 * la nueva variable tendra valor 0
 * 
 * Ejemplo:
 *      $varString = 'uno';
 *      $stringToFloat = (int) $varString;
 *      var_dump($stringToFloat);
 */

 $stringToFloat = (float) $varString;
 var_dump($stringToFloat);

 
/** String to Array
 * 
 */


/**
 * String to integer
 */