<?php

/* 
 * Ejercicio 1 - ¿Qué tags me conviene usar para encerrar código php?
 * <?php ?>
 */

/* 
 * Ejercicio 2 - Aparte del editor recomendado en el curso, ¿qué tipo de editor
 * puedo utilizar para escribir código PHP?
 * Cualquier editor de texto plano tipo block de notas, sublime, notepad++, etc.            
 */

/*
 * Ejercicio 3 - ¿Qué sentencias se utilizan para generar salida por pantalla?
 * print y echo
 */

/*
 * Ejercicio 4 - En el siguiente código.
                 $a = '2';
                 $a = '1' + $a;
 * ¿Qué tipo de dato tendría la variable $a y cuál sería su valor?
 * tipo de dato -> integer (usando var_dump() y gettype())
 * valor 3
 */

/*
 * Ejercicio 5 - ¿Qué significa que php está embebido en HTML?
 * Significa que puede haber codigo php "mezclado" entre la estructura del html
 */

/*
 * Ejercicio 6 - ¿Cuáles son las variables predefinidas de PHP para realizar el
 *                  pasaje de parámetros de entrada?
 * argv         Array de argumentos pasados en la ejecución del script.
$_SERVER['argc']        Número de parámetros pasados al script en su ejecución.
$_SERVER['PHP_SELF'] 	Nombre del script que se está ejecutando
$_GET 			Array asociativo de pares (clave,valor) pasados a través de GET
$_POST 			Array asociativo de pares (clave,valor) pasados a través de POST
$_FILES                 Array asociativo que contiene información de los ficheros recibidos mediante POST
$_ENV 			Array asociativo de pares (clave,valor) del entorno
$_SERVER                Array asociativo de pares (clave,valor) del servidor
$_SESSION               Array asociativo de pares (clave,valor) de sesión
$_ENV 			Array asociativo de pares (clave,valor) del entorno 
$_SERVER 		Array asociativo de pares (clave,valor) del servidor 
$_SESSION 		Array asociativo de pares (clave,valor) de sesión 
$_REQUEST 		Array asociativo de pares pasados a través de GET y POST 
 */

/*
 * Ejercicio 7 - Explique brevemente de qué manera se puede recuperar el valor
 * de las variables de entradas.
 * El valor de las variables de entrada (ya sea por GET o por POST) se puede recuperar
 * mediante el array asociativo a cada metodo $_GET['variable'], $_POST['variable']
 * o existe una tercer alternativa que es usar la variable predefinida $_REQUEST
 */

/*
 * Ejercicio 6 - Analizando las siguientes sentencias 	
	$x = 0;
	$x += 5;
	
	y
	
	$x = 0;
	$x = $x + 5;
	
	Podemos decir que:
        -Son equivalentes
 */

/*
 * Ejercicio 9 - Realizar una variante de Hello World donde se ingrese un parámetro
 * de entrada via GET que se llame nombre, y que en vez de decir simplemente
 * Hello World diga Hello y el nombre ingresado. Adjuntar el código del script
 * en la respuesta.
 */
// p4.php?nombre=nombre

if (isset($_GET['nombre'])){
    echo 'Hello, '. ucfirst($_GET['name']) .'!';
};