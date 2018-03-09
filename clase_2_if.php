<?php

/**
 * CONDICIONAL IF
 * 
 */

if(true){
    var_dump('La condición se cumplio');
}

/**
 * Operadores de comparación
 * 
 * http://php.net/manual/es/language.operators.comparison.php
 * 
 *      $a == $b 	    Igual 	            TRUE si $a es igual a $b después de la manipulación de tipos.
 *      $a === $b 	    Idéntico 	        TRUE si $a es igual a $b, y son del mismo tipo.
 *      $a != $b 	    Diferente 	        TRUE si $a no es igual a $b después de la manipulación de tipos.
 *      $a <> $b 	    Diferente 	        TRUE si $a no es igual a $b después de la manipulación de tipos.
 *      $a !== $b    	No idéntico 	    TRUE si $a no es igual a $b, o si no son del mismo tipo.
 *      $a < $b 	    Menor que 	        TRUE si $a es estrictamente menor que $b.
 *      $a > $b 	    Mayor que 	        TRUE si $a es estrictamente mayor que $b.
 *      $a <= $b 	    Menor o igual que 	TRUE si $a es menor o igual que $b.
 *      $a >= $b     	Mayor o igual que 	TRUE si $a es mayor o igual que $b.
 *      $a <=> $b 	    Nave espacial 	    Un integer menor que, igual a, o mayor que cero cuando $a es respectivamente menor que, igual a, o mayor que $b. Disponible a partir de PHP 7.
 *      $a ?? $b ?? $c 	Fusión de null 	    El primer operando de izquierda a derecha que exista y no sea NULL. NULL si no hay valores definidos y no son NULL. Disponible a partir de PHP 7. 
 */

 $varA = true;
 $varB = true;

 if($varA == $varB){
    var_dump('las condiciones son true');
 }