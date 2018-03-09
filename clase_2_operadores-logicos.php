<?php

/**
 * Operadores lógicos
 * Compara entre 2 posibles valores true / false
 * y empieza a hacer una correlación entre estos valores.
 * 
 * Para conocer mas de los operadores lógicos, 
 * revisar las tablas de verdad: https://es.wikipedia.org/wiki/Tabla_de_verdad
 */

/**
 * AND
 * @ &&
 * Devuelve true si ambos parametros son true
 * 
 */
 var_dump(true && false);
 var_dump(true and false);
 var_dump(true && true);

/**
 * OR
 * @ ||
 * Devuelve true si cualquier de los dos es true
 */
 var_dump(true || false);
 var_dump(true or false);

/**
 * Negación
 * @ !
 * 
 */

 /**
 * xor
 * Devuelve true si uno de los operandos es true, no ambos
 */
 var_dump(false xor false);
 var_dump(true xor true);
 var_dump(true xor false);
