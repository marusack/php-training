<?php
// Ejercicio 1 - A booleano

/*
 * Ejercicio 2 - ¿Por qué hay que encerrar entre llaves un grupo de sentencias
 * de una expresión de control?¿Siempre hay que hacerlo?
 * Es necesario encerrar entre llaves {} las sentencias de una estructura de control
 * cuando existe mas de una sentencia. No es necesario cuando se ejecuta una sola sentencia.
 */
$num = 6;
if ($num > 3)
    echo "Esta es la unica sentencia que se ejecuta" . "\n";

if (($num % 2) == 0) {
    $doble = $num * 2;
    echo "Numero: $num - Doble: $doble";
};

/*
 * Ejercicio 3 - Escribir el código necesario para que se muestre el mensaje "Adulto"
 * si la variable $edad está entre 18 y 65, en caso contrario se debe mostrar el mensaje
 * "Joven". (Escribir scripts con las variantes de las estructuras condicionales)
 */
$edad = 55;

// IF
if (($edad >= 18) and ($edad <= 65)) {
    echo "Adulto";
} else {
    echo "Joven";
};

if (($edad >= 18) and ($edad <= 65)):
    echo "Adulto";
else:
    echo "Joven";
endif;

/*
 * Ejercicio 4 - Variar el ejemplo anterior añadiendo el caso de que si $edad es
 * mayor que 65 muestre el mensaje "Jubilado".
 */

if ($edad < 18) {
    echo "Joven";
} elseif ($edad > 65) {
    echo "Jubilado";
} else {
    echo "Adulto";
};

if ($edad < 18):
    echo "Joven";
elseif ($edad > 65):
    echo "Jubilado";
else:
    echo "Adulto";
endif;

// Switch
switch ($edad){
    case ($edad < 18):
        echo "Joven";
        break;
    case ($edad > 65):
        echo "Jubilado";
        break;
    default:
        echo "Adulto";
};

switch ($edad):
    case ($edad < 18):
        echo "Joven";
        break;
    case ($edad > 65):
        echo "Jubilado";
        break;
    default:
        echo "Adulto";
endswitch;

/*
 * Ejercicio 5 - Hacer un script que muestre todos los valores pares entre 1 y 100
 * utilizando while. AYUDA: Tener en cuenta que si el resto de la división de cualquier
 * número por 2 devuelve 0 ese número es par.
 */

$par = 1;
while ($par <= 100) {
    if (($par % 2) === 0) {
        echo "Numero: $par" . "\n";
    };
    $par++;
};


/*
 * Ejercicio 6 - Idem que 5 pero utilizando for.
 */

for ($num = 1; $num <= 100; $num++ ) {
    if (($num % 2) === 0){
        echo "Num: $num" . "\n";
    };
};

/*
 * Ejercicio 7 - Recorrer el arreglo y mostrar su valor por pantalla utilizando
 * for, while y foreach.
 */

$arr = 	  array('alumno1' => 'Juan',
	     	'alumno2' => 'Carlos',
   	     	'alumno3' => 'Pablo',
	     	'alumno4' => 'Luis',
             	'alumno5' => 'Ruben');		

// For
for ($i = 1; $i <= count($arr); $i++){
    echo $arr['alumno'.$i] . "\n";
};

// While
$i = 1;
while ($i < (count($arr) + 1)){
    echo $arr['alumno'.$i] . "\n";
    $i++;
};

// Foreach
foreach ($arr as $key => $value){
    echo $value . "\n";
};