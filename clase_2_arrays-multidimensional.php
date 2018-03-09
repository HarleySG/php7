<?php

/**
 * Array multidimensional
 * 
 * Podemos definir las llaves del array
 */

 $materias = [
     'sociales',
     'matemáticas',
     'música',
    ];
 
 $usuario = [
     'id' => 1,
     'name' => 'Luis',
     'lastname' => 'Perez',
     'identify' => 123456789,
     'email' => 'luisperez@gmail.com',
    ];
    
 $estudiante = [
     $usuario,
     'materias' => $materias,
    ];


/**
 * RECOMENDACION:
 * 1. Todas las llaves de un array asociativo deben ser strings
 * 2. Para trabajo con equipos se puede dejar la coma al final del último elementos del array (ejemplo linea 14)
 */

 var_dump($estudiante);
//  echo json_encode($estudiante);

/**
 * Acceder a profundidad de array:
 * 
 * Para acceder a un objeto o valor anidado 
 * en un array multidimensional identificamos las posiciones por niveles
 * 
 *  $estudiante['materias'][0]
 *  $estudiante[0]['name']
 */

 var_dump( [$estudiante[0]['name'], $estudiante['materias'][0]] );

?>