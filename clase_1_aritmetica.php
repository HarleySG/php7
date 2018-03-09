<?php

/**
 * Operadores aritmeticos
 * 
 * + SUMA
 * - RESTA
 * * MULTIPLICACION
 * / DIVISIÓN
 * % MODULO
 */

/**
 * Prioridad de los operadores aritmeticos
 * ó presedencia orden aritmetico
 * 
 * 0. Expresiones agrupadas
 * 1. Multiplicaciones
 * 2. Divisiones
 * 3. Modulos
 * 4. Suma
 * 5. Resta
 */

 echo '((4 + 3) * 2) / 10 != 4 + 3 * 2 / 10';
 var_dump(((4 + 3) * 2) / 10);
 var_dump(4 + 3 * 2 / 10);
 var_dump(3 - 3 + 5);

 var_dump(2 + 4 - 2 * 4 / 2);
 var_dump(2 + 4 - 8 / 2);
 var_dump(2 + 4 - 4);
 var_dump(6 - 4);
 var_dump(2);

 echo'-> '; var_dump((2 + 4) - ((2 * 4) / 2));


/**
 * Operacion con modulo
 *    Division exacta
 *    Devuelve el residuo
 * 
 *    7  |__3__
 *    6    2
 *    1
 * 
 */

 var_dump(7/3);
 var_dump(7%3);

?>