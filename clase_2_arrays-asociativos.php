<?php

/**
 * Array asociativo
 * 
 * Podemos definir las llaves del array
 */

 // array de Strings
 $usuario = [
     'name' => 'Luis',
     'lastname' => 'Perez',
     'identify' => 123456789,
     'email' => 'luisperez@gmail.com',
    ];

/**
 * RECOMENDACION:
 * 1. Todas las llaves de un array asociativo deben ser strings
 * 2. Para trabajo con equipos se puede dejar la coma al final del último elementos del array (ejemplo linea 14)
 */

 var_dump($usuario);

/**
 * RECORDAR:
 * Las llaves del array asociativo son las llaves definidas
 * el signo => siginica asignar
 */

 var_dump($usuario['name']);
 var_dump($usuario['lastname']);
 var_dump($usuario['name'] .' '. $usuario['lastname'])

?>