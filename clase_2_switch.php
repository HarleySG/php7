<?php

/**
 * CONDICIONAL switch
 * 
 * La sentensia switch es similar a if exepto a que no se usa una 
 * condición sino un valor que se desea comparar.
 * 
 * Se pueden usar muchos case
 * Cada case es un caso de evaluación
 * 
 * El break sirve para terminar la comparación en caso de que un 
 * case sea igual a la condición pasada.
 * 
 * Si no usamos break 'pasa derecho', es decir se ejecutan todos los casos
 * aun si eso no se quisiera.
 * 
 * default actual como un else, se ejecuta cuando ningún caso conincide.
 */

 $varB = 'woo';
 
 switch ($varB) {
     case 'foo':
         var_dump("Aunque $varB es foo");
     case 'bar':
         var_dump("$varB no es bar");
     case 'liw':
         var_dump("ni tampoco $varB es liw");
     case 'default';
         var_dump('al no usar default: los case se ejecutan aun despúes de haber una coincidencia. Si no hay coincidencia no se ejecuta nada, como debe ser.');
 }


 $varC = 'woo';
 
 switch ($varC) {
     case 'foo':
         var_dump("$varC es foo");
     case 'bar':
         var_dump("$varC es bar");
     case 'liw':
         var_dump("$varC es liw");
     default:
         var_dump("Usando la opción default llegamos a ella si no hay coincidencias en los case");
 }


 $varA = 'woo';
 
 switch ($varA) {
     case 'foo':
         var_dump("La variable es $varA");
         break;
     case 'bar':
         var_dump("La variable es $varA");
         break;
     default:
         var_dump("Usando los break; en cada case nos aseguramos de controlar el comportamiento de los case. Tambien en recomentable usar el default:");
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